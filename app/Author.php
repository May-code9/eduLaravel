<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'user_id', 'author_name', 'about_author', 'author_image'
    ];
    protected $dates = [
      'deleted_at'
    ];
    public function getShortMessageAttribute() {
      return substr($this->about_author, 0, random_int(70, 80)) . '...';
    }
}
