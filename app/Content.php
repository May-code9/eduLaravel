<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
      'user_id', 'course_id', 'week_id', 'category_id', 'content_title', 'content_pdf', 'content_image', 'content_video'
    ];
    protected $dates = [
      'deleted_at'
    ];
}
