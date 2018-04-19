<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'user_id', 'author_id', 'book_name', 'about_book', 'book_category_id', 'book_pdf', 'book_image'
    ];
}
