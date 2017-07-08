<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student_Response extends Model
{
    protected $table = 'Student_Response';
    public $fillable = ['StudentId','QuestionId','Response'];
}
