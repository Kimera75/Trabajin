<?php


use Illuminate\Database\Seeder;


class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = App\myModel\Articles_category::all();

        $articles = factory(App\myModel\Article::class,50)->make();

        foreach($articles as $article){
        	$caregory = $categories->random()->articles()->save($article);
        	 
        }

    }
}



