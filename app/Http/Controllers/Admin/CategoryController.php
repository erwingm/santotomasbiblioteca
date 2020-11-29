<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Book;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::all();

        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
   
        $category = new Category();
        $slug = str_slug($request->input('categoryName'));
        $category->name = $request->input('categoryName');
        $category->slug = $slug;
        $category->description = $request->input('categoryDescription');
        if($category->save()){
            toastr()->success('Se Registro exitosamente!');
            return redirect('admin/category');
        }
        toastr()->error('Error Message');
        return redirect()->back();
        
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $category  = Category::find($id);
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $category = Category::find($id);
        $slug = str_slug($request->name);
        $category->name = $request->input('categoryName');
        $category->description = $request->input('categoryDescription');
        if($category->save()){
            return redirect('admin/category')->with('success', 'Se Registro la Categoria');
        }
        return redirect()->back()->with('failed','Problemas para registarar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        //

        if(Category::destroy($id)){
            toastr()->success('Se Elimino exitosamente!');
            return redirect()->back();
        }
        return redirect()->back();

   
    }
}
