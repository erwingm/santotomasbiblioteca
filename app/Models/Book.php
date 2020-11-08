<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //

    protected $dates = ['published_at'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
