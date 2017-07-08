<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChapterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Chapter', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('subject_grade_id')->unsigned();
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
        Schema::dropIfExists('Chapter');
    }
}
