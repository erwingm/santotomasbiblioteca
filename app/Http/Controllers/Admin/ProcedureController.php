<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Procedure;

class ProcedureController extends Controller
{
    //

    public function index(){
        $procedures = Procedure::all();

        return view('admin.procedure.index',compact('procedures'));
    }

}
