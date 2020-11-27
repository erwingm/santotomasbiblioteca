<?php

namespace App\Models;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $guarded = [];


    protected $dates = ['published_at'];
    protected $table = 'books';

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function editorial(){
        return $this->belongsTo(Editorial::class);
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
