<?php

namespace App\Models;
use Carbon\Carbon;

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
    public function photos(){
        return $this->hasMany(Photo::class);
    }


}
