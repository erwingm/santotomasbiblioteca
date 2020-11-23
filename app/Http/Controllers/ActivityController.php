<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;

class ActivityController extends Controller
{
    //
    // public function show($id){
    //     return $id;
    // }
    $activities = Activity::all();
    $tags = Tag::all();
    return view('pages.actividades',compact('tags','activities'));
}
