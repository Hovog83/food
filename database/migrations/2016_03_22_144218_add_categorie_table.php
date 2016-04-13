<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategorieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){

        Schema::create('categorie', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->enum('status',['ACTIVE','DELETED'])->default("ACTIVE");
            $table->string('icone');
            $table->integer('order');
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
        Schema::drop('categorie');
    }
}
