<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
     protected $table = 'Question';
    public $fillable = ['SubjectId','ChapterId','TopicId','Answer'];
}
