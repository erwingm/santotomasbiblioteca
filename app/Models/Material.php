<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    //
    
    public function getRouteKeyName(){
        return 'slug';
    }

    public function books(){
        return $this->belongsToMany(Book::class);
    }
}
