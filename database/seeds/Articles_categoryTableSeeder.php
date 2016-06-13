<?php


use Illuminate\Database\Seeder;


class Articles_categoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\myModel\Articles_category::class,9)->create();
        
    }
}
