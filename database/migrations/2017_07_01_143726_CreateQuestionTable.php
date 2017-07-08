<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Question', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subject_grade_id')->unsigned();
            $table->foreign('subject_grade_id')->references('id')->on('Subject_Grade');
            $table->integer('chapter_id')->unsigned();
            $table->foreign('chapter_id')->references('id')->on('Chapter');
            $table->integer('topic_id')->unsigned();
            $table->foreign('topic_id')->references('id')->on('Topic');
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
        Schema::dropIfExists('Question');
    }
}
