<?php

use Illuminate\Support\Facades\Schema;
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
            $table->increments('id');
            $table->string('first_name',30);
            $table->string('last_name',30)->nullable();
            $table->string('email',50)->unique();
            $table->string('password',255)->nullable();
            $table->integer('user_type_id')->unsigned()->references('id')->on('user_type')->onDelete('cascade');
            $table->string('phone')->nullable();
            $table->integer('position_id')->nullable()->unsigned()->references('id')->on('positions')->onDelete('cascade');
            $table->string('facebook_id')->nullable();
            $table->string('image')->default('avatar.png');
            $table->boolean('is_active');
            $table->enum('work_status',['freelancer','employee']);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
