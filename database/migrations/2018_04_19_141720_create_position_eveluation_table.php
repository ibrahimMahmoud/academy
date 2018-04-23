<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePositionEveluationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('position_eveluation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('position_id')->unsigned()->references('id')->on('positions')->onDelete('cascade');
            $table->integer('updated_by')->unsigned()->references('id')->on('users')->onDelete('cascade');
            $table->string('degree');
            $table->enum('is_active',['0','1']);
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
        Schema::dropIfExists('position_eveluation');
    }
}
