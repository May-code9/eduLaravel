<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Content extends Model
{
  use SoftDeletes;

  protected $fillable = [
    'user_id', 'course_id', 'category_id', 'content_number', 'week_no', 'content_title', 'content_pdf', 'content_image', 'content_video', 'content_text'
  ];
  protected $dates = [
    'deleted_at'
  ];
  public function getShortContentAttribute() {
    return substr($this->content_text, 0, random_int(40, 50)) . '...';
  }
  public function getShortVideoAttribute() {
    return substr($this->content_video, 0, random_int(40, 50)) . '...';
  }
}
