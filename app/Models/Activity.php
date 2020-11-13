<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //
    protected $guarded = [];

    protected $dates = ['published_at'];

    public function getRouteKeyName(){
        return 'url';
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
