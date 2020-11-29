<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Material;
class SearchController extends Controller
{
    //

    public function search(Request $request){
        $materials = Material::all();
        $query = $request->input('query');
        
        $books = Book::where('title','LIKE',"%$query%")->get();

        return view('search',compact('books', 'query','materials'));
    }
}
