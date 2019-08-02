<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_options', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('store');
            $table->string('store_website');
            $table->longText('store_description');
            $table->string('store_logo');
            $table->string('subscription');
            $table->string('fall_back_language');
            $table->string('article_layout');
            $table->string('article_color');
            $table->string('var_1')->nullable();
            $table->string('var_2')->nullable();
            $table->string('var_3')->nullable();
            $table->string('var_4')->nullable();
            $table->string('var_5')->nullable();
            $table->string('var_6')->nullable();
            $table->string('var_7')->nullable();
            $table->string('var_8')->nullable();
            $table->string('var_9')->nullable();
            $table->string('var_10')->nullable();
            $table->string('active');
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
        Schema::dropIfExists('store_options');
    }
}
