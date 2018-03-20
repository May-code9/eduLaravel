<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseInstructor extends Model
{
    protected $fillable = [
      'user_id', 'course_id', 'instructor_id'
    ];
}
