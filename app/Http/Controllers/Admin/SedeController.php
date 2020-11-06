<?php

namespace App\Http\Controllers\Admin;

use App\Sede;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SedeController extends Controller
{
    //

    public function index(){
        $sedes = Sede::All();
        return view ('admin.sedes.index', compact('sedes'));
    }
}
