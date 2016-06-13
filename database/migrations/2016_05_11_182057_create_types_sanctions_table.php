<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypesSanctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('types_sanctions', function (Blueprint $table) {
            $table->bigIncrements('id');;
            $table->string('name',50)->required();
            $table->text('description')->nullable();
            $table->float('amount_payable')->required()->default(0.0);
            $table->integer('appliying_days')->unsigned();
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
        Schema::drop('types_sanctions');
    }
}
