<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'user_id', 'school_id', 'course', 'total_weeks', 'about_course', 'instructor_id', 'course_image'
    ];

    protected $dates = [
      'deleted_at'
    ];

    public function getShortMessageAttribute() {
      return substr($this->about_course, 0, random_int(30, 40)) . '...';
    }
}
