<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Models\Vision;

class VisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $visions = Vision::all();
        return view('admin.vision.index',compact('visions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.vision.create');
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
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('vision')){
                Storage::disk('public')->makeDirectory('vision');
            }
            $storyImage = Image::make($image)->resize(1600,1066)->stream();
            Storage::disk('public')->put('vision/'.$imageName,$storyImage);
        }else{

            $imageName = "default.png";
        }
        $story = new Vision();
        $story->name = $request->name;
        $story->slug = $slug;
        $story->description = $request->description;
        $story->image = $imageName;
        $story->save();
        toastr()->success('Se Registro exitosamente!');
        return redirect()->route('vision.index');
    
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
        $vision = Vision::find($id);
        return view('admin.vision.edit',compact('vision'));
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
        $image = $request->file('image');
        $slug = str_slug($request->name);
        $vision = Vision::find($id);

        if(isset($image)){

            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('vision')){
                Storage::disk('public')->makeDirectory('vision');
            }
            // Busqueda y Elimina para la actualizacion de dato
            if(Storage::disk('public')->exists('vision/'.$vision->image)){
                
                Storage::disk('public')->delete('vision/'.$vision->image);
            }
            $visionImage = Image::make($image)->resize(500,255)->stream();
            Storage::disk('public')->put('vision/'.$imagename, $visionImage);

        }else{
            $imagename = $vision->image;
        }


        $vision->name = $request->name;
        $vision->slug = $slug;
        $vision->description = $request->description;
        $vision->image = $imagename;
        $vision->save();

        toastr()->success('Se Actualizo exitosamente!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $vision = Vision::find($id);
        if(Storage::disk('public')->exists('vision/'.$vision->image)){
            Storage::disk('public')->delete('vision/'.$vision->image);
        }
        $vision->delete();
        toastr()->success('Se Elimino exitosamente!');
        return redirect()->back();
    }
}
