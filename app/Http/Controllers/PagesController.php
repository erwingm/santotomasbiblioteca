<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Activity;
use App\Models\Tag;
use Carbon\Carbon;

class PagesController extends Controller
{
    //
    public function activity(){
        $activities = Activity::all();
        $tags = Tag::all();
        return view('activity.actividades',compact('tags','activities'));
    }
    public function procedure(){
        return view('pages.tramite');
    }
    public function home(){
        return view('layout');
    }
    public function information(){
        return view('pages.information');
    }
    

}
