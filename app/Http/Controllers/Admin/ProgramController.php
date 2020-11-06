<?php

namespace App\Http\Controllers\Admin;

use App\Program;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProgramController extends Controller
{
    //
    public function index(){
        $programas = Program::all();
        return view ('admin.programas.index', compact('programas'));
    }
}
