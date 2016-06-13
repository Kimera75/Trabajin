 <?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleLoansHeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_loans_heads', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('loans_head_id')->unsigned();
            $table->string('article_id',7);

            $table->foreign('loans_head_id')->references('id')->on('loans_heads');
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
        Schema::drop('article_loans_heads');
    }
}
