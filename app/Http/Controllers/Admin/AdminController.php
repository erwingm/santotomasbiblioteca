<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Procedure;
use Carbon\Carbon;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Material;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $books = Book::all();
        $popular_books = Book::orderBy('view_count','desc')->take(5)->get();
        $all_views = Book::sum('view_count');
        $new_procedures = Procedure::whereDate('created_at', Carbon::today())->count();
        $category_count = Category::all()->count();

              
        $tag_count = Tag::all()->count();
        return view('admin.dashboard', compact('books','popular_books','all_views','new_procedures','category_count','tag_count'));
    }
}
