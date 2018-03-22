<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $fillable = [
      'user_id', 'instructor', 'about_instructor', 'instructor_image'
    ];

    public function getShortMessageAttribute() {
      return substr($this->about_instructor, 0, random_int(30, 50)) . '...';
    }
}
