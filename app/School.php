<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class School extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'user_id', 'name', 'locations', 'founded', 'founder'
    ];

    protected $dates = [
      'founded', 'deleted_at'
    ];

    public function getTimeAttribute($value) {
      return date_format($this->founded, 'd M Y');
    }
}
