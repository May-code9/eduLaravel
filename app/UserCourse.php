<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserCourse extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'user_id', 'course_id', 'paid'
    ];
}
