<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserEveluationAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_eveluation_answer', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('eveluation_id')->unsigned()->references('id')->on('user_eveluation')->onDelete('cascade');
            $table->integer('question_id')->unsigned()->references('id')->on('eveliation_questions')->onDelete('cascade');
            $table->float('scoure')->default(0);
            $table->longText('answer')->nullable();

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
        Schema::dropIfExists('user_eveluation_answer');
    }
}
