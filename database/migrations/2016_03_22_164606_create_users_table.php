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
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role',['USER', 'ADMIN','MODERATOR']);
            $table->enum('status',['ACTIVE','DELETED','BLOCKED','BANNED','NEW']);
            $table->enum('online',['YES','NO']);
            $table->integer('home_phone');
            $table->integer('mobile_phone');
            $table->string('address');
            $table->string('ip_address');
            $table->string('token');
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
        Schema::drop('users');
    }
}
