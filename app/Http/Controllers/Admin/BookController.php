<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    //
    public function index(){
        
        // $contacts = DB::table('contacts')->paginate(10);
        $books = Book::all();
        return view('admin.book.index', compact('books'));
    }

    public function create(){
        
        // $contacts = DB::table('contacts')->paginate(10);
        return view('admin.book.add');
    }
}
