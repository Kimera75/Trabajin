<?php


use Illuminate\Database\Seeder;


class Types_sanctionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\myModel\Types_sanction::class,5)->create();
    }
}
