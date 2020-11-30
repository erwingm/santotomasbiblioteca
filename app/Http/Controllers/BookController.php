<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Material;
use Illuminate\Support\Facades\Session;
use App\Models\Author;
class BookController extends Controller
{
    //

 
    public function details($slug)
    {   
        $authors = Author::all();
        $books = Book::all();
        $materials = Material::all();
        $book = Book::where('slug',$slug)->first();
        
        $bookKey = 'book_' . $book->id;
        if(!Session::has($bookKey)){
            $book->increment('view_count');
            Session::put($bookKey,1);
        }
        $randombooks = Book::all()->random(4);
        return view('book',compact('book','randombooks','materials','books','authors'));

    }


}
