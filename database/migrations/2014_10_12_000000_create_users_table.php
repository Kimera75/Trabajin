
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('id',9)->primary();         
            $table->string('name',40); 
            $table->string('career_id',5)->foreign()->references('id')->on('careers');
            $table->integer('num_sanctions')->unsigned()->default(0);
            $table->enum('locked_loans',['Si','No'])->default('No');
            $table->enum('active',['Si','No'])->default('Si');
            $table->string('role');
            $table->string('e_mail')->required()->unique();
           // $table->rememberToken();
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
        Schema::drop('users');
    }
}
