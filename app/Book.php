<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'user_id', 'author_id', 'book_name', 'about_book', 'book_category_id', 'book_pdf', 'book_image', 'book_cost'
    ];
    public function getShortAboutBookAttribute() {
      return substr($this->about_book, 0, random_int(30, 40)) . '...';
    }
    public function getPublicAboutBookAttribute() {
      return substr($this->about_book, 0, 40) . '...';
    }
    public function getShortPdfAttribute() {
      return substr($this->book_pdf, 0, random_int(20, 30)) . '...';
    }
}
