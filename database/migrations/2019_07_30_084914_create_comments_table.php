<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('blog_id');
            $table->string('user_id');
            $table->longText('comment');
            $table->string('reading_time');
            $table->string('active');
            $table->string('hearts')->nullable();
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
        Schema::dropIfExists('comments');
    }
}
