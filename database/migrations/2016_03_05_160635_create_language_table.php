<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use \App\Models\Common\Language;

class CreateLanguageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('language', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 10)->unique();
            $table->string('name');
            $table->smallInteger('status')->default(Language::STATUS_INACTIVE);
            $table->smallInteger('fallback_locale')->default(0);
            $table->string('country_code', 3);
            $table->string('lang_country', 10)->unique();
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
        Schema::drop('language');
    }
}
