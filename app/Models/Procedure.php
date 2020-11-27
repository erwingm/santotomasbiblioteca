<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    //
    
    public function distric(){
        return $this->belongsTo(Category::class);
    }
}
