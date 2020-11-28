<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Models\Book;
use App\Models\Tag;
use App\Models\Author;
use App\Models\Material;
use App\Models\Editorial;
use App\Models\Category;





use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class BookController extends Controller
{
    //
    public function index(){
        
        // $contacts = DB::table('contacts')->paginate(10);
        $books = Book::latest()->get();
        $tags = Tag::all();
        return view('admin.book.index', compact('books','tags'));
               
       
    }

    public function create(){

        $tags = Tag::all();
        $authors = Author::all();
        $materials = Material::all();
        $categories = Category::all();
        $editorials = Editorial::all();

        return view('admin.book.add',compact('tags','authors','materials','editorials','categories'));
    }

    public function store(Request $request){

        $image = $request->file('image');
        $slug = str_slug($request->title);
        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('book')){
                Storage::disk('public')->makeDirectory('book');
            }
            $bookImage = Image::make($image)->resize(200,200)->stream();
            Storage::disk('public')->put('book/'.$imageName,$bookImage);
        }else{

            $imageName = "default.png";
        }

    // PDF
        $pdf = $request->file('document');
        if(isset($pdf)){
            $pdfName=time().'.'.$pdf->getClientOriginalExtension();
            $destinationPath = public_path('/pdfs');
            $pdf->move($destinationPath, $pdfName);
        }else{
            $pdfName = "document.pdf";
        }
       

        $book = new Book();
        $book->code = $request->code;
        $book->title = $request->title;
        $book->slug = $slug;
        $book->image = $imageName;
        $book->description = $request->description;
        $book->extract = $request->extract;
        $book->quantity = $request->quantity;
        $book->document = $request->pdfName;
        $book->page = $request->page;
        $book->donwload = $request->donwload;
        $book->category_id = $request->category;
        $book->editorial_id = $request->editorial;
        if(isset($request->status)){
            $book->status = true;
        }else{
            $book->status = false;
        }
        $book->save();

        $book->tags()->attach($request->tags);
        $book->materials()->attach($request->materials);
        $book->authors()->attach($request->authors);

        toastr()->success('Se Registro exitosamente!');
        return redirect()->route('book.index');
        
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
        $book = Book::find($id);
        return view('admin.book.show',compact('book'));
    }

    public function edit($id)
    {
        //
        $book = Book::find($id);
        $tags = Tag::all();
        $authors = Author::all();
        $materials = Material::all();
        $categories = Category::all();
        $editorials = Editorial::all();

        return view('admin.book.edit',compact('book','tags','authors','materials','editorials','categories'));
    }

    public function update(Request $request, $id){

        
        $image = $request->file('image');
        $slug = str_slug($request->title);
        $book = Book::find($id);

        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('book')){
                
                Storage::disk('public')->makeDirectory('book');
            }

          // Busqueda y Elimina para la actualizacion de dato
            if(Storage::disk('public')->exists('book/'.$book->image)){
                
                Storage::disk('public')->delete('book/'.$book->image);
            }
            $bookImage = Image::make($image)->resize(500,255)->stream();
            Storage::disk('public')->put('book/'.$imagename, $bookImage);;


        }else{

            $imagename = $book->image;
        }

         // PDF
         if($request->has('document')){
            $pdf = $request->file('document');
            $pdfName=time().'.'.$pdf->getClientOriginalExtension();
            $destinationPath = public_path('/pdfs');
            $pdf->move($destinationPath, $pdfName);
        }else{
            $pdfName=$request->pdf_old;
        }

        $book->code = $request->code;
        $book->title = $request->title;
        $book->slug = $slug;
        $book->image = $imagename;
        $book->description = $request->description;
        $book->extract = $request->extract;
        $book->quantity = $request->quantity;
        $book->document = $request->pdfName;
        $book->page = $request->page;
        $book->donwload = $request->donwload;
        $book->category_id = $request->category;
        $book->editorial_id = $request->editorial;

        if(isset($request->status)){
            $book->status = true;
        }else{
            $book->status = false;
        }
        $book->save();

        $book->tags()->sync($request->tags);
        $book->materials()->sync($request->materials);
        $book->authors()->sync($request->authors);

        toastr()->success('Se Actulizo exitosamente!');
        return redirect()->route('book.index');
        
    }
    public function destroy(Book $book){
        if(Storage::disk('public')->exists('book/'.$book->image)){
            Storage::disk('public')->delete('book/'.$book->image);
        }
        $book->materials()->detach();
        $book->tags()->detach();
        $book->authors()->detach();
        $book->delete();
        toastr()->success('Se Elimino exitosamente!');
        return redirect()->route('book.index');

    }
}
