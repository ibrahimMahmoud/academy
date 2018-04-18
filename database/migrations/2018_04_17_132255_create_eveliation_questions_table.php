<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEveliationQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eveliation_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('question')->nullable();
            $table->float('scoure')->default(0);
            $table->integer('created_by')->unsigned()->references('id')->on('users')->onDelete('cascade');
            $table->integer('position_id')->unsigned()->references('id')->on('positions')->onDelete('cascade');
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
        Schema::dropIfExists('eveliation_questions');
    }
}
