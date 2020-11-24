<?php

namespace App\Http\Controllers\Admin;
use App\Models\Book;
use App\Models\Tag;
use App\Models\Author;
use App\Models\Material;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class BookController extends Controller
{
    //
    public function index(){
        
        // $contacts = DB::table('contacts')->paginate(10);
        $books = Book::all();
        $tags = Tag::all();
        return view('admin.book.index', compact('books','tags'));
               
       
    }

    public function create(){

        $tags = Tag::all();
        $authors = Author::all();
        $materials = Material::all();

        return view('admin.book.add',compact('tags','authors','materials'));
    }
}
