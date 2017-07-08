<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('User', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('cnic');
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->string('user_role');
            $table->date('date_of_birth');
            $table->integer('grade_id')->unsigned();
            $table->foreign('grade_id')->references('id')->on('Grade');
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
        Schema::dropIfExists('User');
    }
}
