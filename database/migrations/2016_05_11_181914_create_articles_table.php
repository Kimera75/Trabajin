<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->string('id',7)->primary()->required();
            $table->string('articles_category_id',7)->foreign()->references('id')->on('articles_categories');            
            $table->string('name',50)->required();
            $table->text('description')->nullable();
            $table->integer('quantity')->unsigned()->default(1);
            $table->dateTime('last_date_loan')->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articles');
    }
}
