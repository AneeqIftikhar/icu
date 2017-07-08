<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Quiz', function (Blueprint $table) {
            $table->increments('id');
            $table->string('duration');
            $table->string('total_marks');
            $table->integer('teacher_id')->unsigned();
            $table->integer('subject_grade_id')->unsigned();
            $table->foreign('teacher_id')->references('id')->on('User');
            $table->foreign('subject_grade_id')->references('id')->on('Subject_Grade');
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
        Schema::dropIfExists('Quiz');
    }
}
