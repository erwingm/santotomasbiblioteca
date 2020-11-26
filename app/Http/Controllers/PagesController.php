<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Activity;
use App\Models\Tag;
use App\Models\Investigation;
use App\Models\Procedure;
use App\Models\Objective;

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
    public function procedurestore(Request $request){
        $procedure = new Procedure();
        $procedure->dni = $request->input('dni');
        $procedure->name = $request->input('name');
        $procedure->last_name_one = $request->input('last_name_one');
        $procedure->last_name_two = $request->input('last_name_two');
        $procedure->level_study = $request->input('level_study');
        $procedure->distric = $request->input('distric');
        $procedure->institute = $request->input('institute');
        $procedure->save();
        
        toastr()->success('Se Registro Exitosamente!');
        return redirect()->back();
    }

    public function home(){
        return view('layout');
    }
    public function information(){

        $objectives = Objective::all();
        return view('pages.information',compact('objectives'));
    }

    public function investigation(){
        $investigations = Investigation::all();
        return view('pages.investigacion',compact('investigations'));

    }


    

}
