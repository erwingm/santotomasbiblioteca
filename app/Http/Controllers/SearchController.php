<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Material;
use App\Models\Slider;
class SearchController extends Controller
{
    //

    public function search(Request $request){
        $materials = Material::all();
        $query = $request->input('query');
        $sliders = Slider::all();
        
        $books = Book::where('title','LIKE',"%$query%")->get();

        return view('search',compact('books', 'query','materials','sliders'));
    }
}
