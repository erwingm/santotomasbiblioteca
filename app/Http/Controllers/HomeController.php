<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\tag;
use App\Models\Material;
use App\Models\Category;

class HomeController extends Controller
{
    //
    // public function index(){
    //     $books = Book::latest()->take(5)->get();
    //     $tags = Tag::all();
    //     $materials = Material::all();
    //     return view('layout',compact('materials','books','tags'));
    // }
    public function index(){
        $categories = Category::all();
        $tags = Tag::all();
        $materials = Material::all();
        $books = Book::latest()->paginate(10);
        return view('books',compact('books','materials','categories','tags'));
    }
    // public function list(){
    //     $books = Book::latest()->take(5)->get();
    //     $tags = Tag::all();
    //     $materials = Material::all();
    //     return view('book',compact('books','tags','materials'));
    // }
}