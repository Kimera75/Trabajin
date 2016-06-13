<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersLoansHeadsTypeSanctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_loans_heads_type_sanctions', function (Blueprint $table) {
            $table->increments('id');            
            $table->bigInteger('loans_head_id')->unsigned();            
            $table->bigInteger('types_sanction_id')->unsigned();
            $table->string('user_id',9);

            $table->foreign('user_id',9)->references('id')->on('users');
            $table->foreign('loans_head_id')->references('id')->on('loans_heads');            
            $table->foreign('types_sanction_id')->references('id')->on('types_sanctions');      

            $table->dateTime('actual_delivery_date')->required();
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
        Schema::drop('users_loans_heads_type_sanctions');
    }
}
