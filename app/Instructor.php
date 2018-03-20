<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $fillable = [
      'user_id', 'instructor', 'about_instructor', 'instructor_image'
    ];
}
