<?php


use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

    	$careers = App\myModel\Career::all();

        $users =  factory(App\myModel\User::class,50)->make();

        foreach ($users as $user){
            $career = $careers->random()->users()->save($user);
        }
    }
}
