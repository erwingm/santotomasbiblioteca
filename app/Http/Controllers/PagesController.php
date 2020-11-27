<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Activity;
use App\Models\History;
use App\Models\Tag;
use App\Models\Investigation;
use App\Models\Procedure;
use App\Models\Objective;
use App\Models\Vision;
use App\Models\Category;
use App\Models\Distric;
use App\Models\Book;


use Carbon\Carbon;

class PagesController extends Controller
{
    //
    public function activity(){
        $activities = Activity::all();
        $tags = Tag::all();
        $categories = Category::all();
        return view('activity.actividades',compact('tags','activities','categories'));
    }


    
    public function procedure(){
        $categories = Category::all();
        $districs = Distric::all();
        return view('pages.tramite',compact('categories','districs'));
    }
    public function procedurestore(Request $request){
        $procedure = new Procedure();
        $procedure->dni = $request->input('dni');
        $procedure->name = $request->input('name');
        $procedure->last_name_one = $request->input('last_name_one');
        $procedure->last_name_two = $request->input('last_name_two');
        $procedure->level_study = $request->input('level_study');
        $procedure->distric_id = $request->input('distric');
        $procedure->institute = $request->input('institute');
        $procedure->save();
        
        toastr()->success('Se Registro Exitosamente!');
        return redirect()->back();
    }

    public function home(){
        $books = Book::all();
        return view('layout',compact('books'));
    }
    public function information(){

        $objectives = Objective::all();
        $story = DB::table('histories')->get();
        $vision = DB::table('visions')->get();
        return view('pages.information',compact('objectives','vision'),['story'=>$story]);
    }


    public function investigation(){
        $investigations = Investigation::all();
        $categories = Category::all();
        return view('pages.investigacion',compact('investigations','categories'));

    }


    

}
