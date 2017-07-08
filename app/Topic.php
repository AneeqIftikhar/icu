<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $table = 'Topic';
    public $fillable = ['Name','ChapterId'];
}
