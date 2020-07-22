<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments_question', function (Blueprint $table) {
            $table->increments('id');
            $table->string('comment');
            $table->integer('user_id')->unsigned();
            $table->integer('question_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');
            
            $table->foreign('question_id')
                  ->references('id')
                  ->on('questions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments_question');
    }
}
