<?php

namespace App\Models;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $guarded = [];

    protected $dates = ['published_at'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    public function authors(){
        return $this->belongsToMany(Author::class);
    }
    public function materials(){
        return $this->belongsToMany(Material::class);
    }
}
