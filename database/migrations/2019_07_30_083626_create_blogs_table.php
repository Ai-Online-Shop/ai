<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('language_code');
            $table->string('author_id');
            $table->string('title');
            $table->string('desc');
            $table->string('slug')->unique();
            $table->longText('longtext');
            $table->string('tags');
            $table->string('reading_time');
            $table->string('section');
            $table->string('active');
            $table->string('hits')->nullable();
            $table->string('view_time')->nullable();
            $table->string('popular')->nullable();
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
            $table->string('promoted')->nullable();
            $table->string('editor_choice')->nullable();
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
        Schema::dropIfExists('blogs');
    }
}
