<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Instructor extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'user_id', 'instructor', 'about_instructor', 'instructor_image'
    ];
    protected $dates = [
      'deleted_at'
    ];

    public function getShortMessageAttribute() {
      return substr($this->about_instructor, 0, random_int(40, 50)) . '...';
    }
}
