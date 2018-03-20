<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
      'user_id', 'course', 'course', 'total_weeks', 'about_course'
    ];
}
