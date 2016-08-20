<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansHeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans_heads', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('user_id',9)->foreign()->references('id')->on('users');
            
           $table->index(['id','user_id'],'index_loans_heads');

            $table->string('start_date_loan')->required();
            $table->string('end_date_loan')->required();
            $table->enum('type_loan',['Interno','Externo'])->default('Externo');
            $table->enum('state',['EnCurso','Incompleto','Completo','ETarde'])->default('EnCurso');
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
        Schema::drop('loans_heads');
       
    }
}
