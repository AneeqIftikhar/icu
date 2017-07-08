<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentSubjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Student_Subject', function (Blueprint $table) {
            $table->increments('Id');
            $table->integer('student_id')->unsigned();
            $table->integer('subject_grade_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('User');
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
        Schema::dropIfExists('Student_Subject');
    }
}
