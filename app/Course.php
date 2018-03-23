<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'user_id', 'school_id', 'course', 'course', 'total_weeks', 'about_course', 'instructor_id'
    ];

    protected $dates = [
      'deleted_at'
    ];
}
