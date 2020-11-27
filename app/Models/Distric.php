<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Distric extends Model
{
    //
    public function procedures(){
        return $this->hasMany(Book::class);
    }
}
