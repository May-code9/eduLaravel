<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    protected $fillable = [
      'user_id', 'week_no', 'course_id', 'content1_id', 'content2_id', 'content3_id', 'content4_id', 'content5_id', 'content6_id', 'count'
    ];
}
