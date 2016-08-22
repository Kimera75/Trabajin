<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('loans_items', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('loans_heads_id')->unsigned();
            $table->string('article_id',7);
/***************************************/
            $table->foreign('loans_heads_id')->references('id')->on('loans_heads');
            $table->foreign('article_id',7)->references('id')->on('articles');

            $table->enum('state',['Entregado','Faltante','ETarde'])->default('Faltante');
            $table->integer('quantity')->unsigned()->default(1);

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
        Schema::drop('loans_items');
    }
}
