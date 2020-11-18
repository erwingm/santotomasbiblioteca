<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(){
        return view('layout');
    }
    public function procedure(){
        return view('pages.procedure');
    }
    public function activity(){
        return view('pages.actividades');
    }
    
}
