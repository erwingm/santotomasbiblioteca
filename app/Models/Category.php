<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $guarded = [];
    protected $fillable = ['name','description'];
    protected $table = 'categories';

    
    public function books(){
        return $this->hasMany(Book::class);
    }

    public function getRouteKeyName(){
        return 'slug';
    }
}
