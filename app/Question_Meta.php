<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question_Meta extends Model
{
   	protected $table = 'Question_Meta';
    public $fillable = ['QuestionId','Meta_Key','Meta_Value',];
}
