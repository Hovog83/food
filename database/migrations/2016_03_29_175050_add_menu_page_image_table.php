<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMenuPageImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up(){
        Schema::create('page_image', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
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
        Schema::drop('page_image');
    }
}
