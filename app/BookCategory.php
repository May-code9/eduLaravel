<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookCategory extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'user_id', 'book_category'
    ];
}
