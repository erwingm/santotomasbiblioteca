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
use App\Models\Material;
use App\Models\Slider;


use Carbon\Carbon;

class PagesController extends Controller
{
    //
    public function activity(){
        $activities = Activity::all();
        $tags = Tag::all();
        $categories = Category::all();
        $books = Book::all();
        $materials = Material::all();
        return view('activity.actividades',compact('tags','activities','categories','books','materials'));
    }


    
    public function procedure(){
        $categories = Category::all();
        $districs = Distric::all();
        $books = Book::all();
        $tags = Tag::all();
        $materials = Material::all();
        return view('pages.tramite',compact('categories','districs','books','tags','materials'));
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


    public function information(){

        $objectives = Objective::all();
        $materials = Material::all();
        $story = DB::table('histories')->get();
        $vision = DB::table('visions')->get();

        return view('pages.information',compact('objectives','vision','materials'),['story'=>$story]);
    }


    public function investigation(){
        $investigations = Investigation::all();
        $categories = Category::all();
        $tags = Tag::all();
        $materials = Material::all();
        return view('pages.investigacion',compact('investigations','categories','tags','materials'));

    }

    public function navBar(){
        $materials = Material::all();
        return view('partials.nav',compact('materials'));
    }

    public function postByCategory($slug){
        $materials = Material::all();
        $category = Category::where('slug', $slug)->first();
        return view('category',compact('category','materials'));

    }

    public function bookByTag($slug){
        $materials = Material::all();
        $tag = Tag::where('slug',$slug)->first();
        return view('tag',compact('tag','materials'));
    }

    public function bookByFisico($slug){
        $sliders = Slider::all();
        $materials = Material::all();
        $material = Material::where('slug', $slug)->first();
        return view('fisico',compact('material','materials','sliders'));
    }







    

}
