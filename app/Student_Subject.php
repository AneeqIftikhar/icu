<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student_Subject extends Model
{
    protected $table = 'Student_Subject';
    public $fillable = ['StudentId','SubjectId'];
}