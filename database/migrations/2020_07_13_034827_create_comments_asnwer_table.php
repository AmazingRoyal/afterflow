<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsAsnwerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments_asnwer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('comment');
            $table->integer('user_id')->unsigned();
            $table->integer('answer_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');
            
            $table->foreign('answer_id')
                  ->references('id')
                  ->on('answers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments_asnwer');
    }
}
