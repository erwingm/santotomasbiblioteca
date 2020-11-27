<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Models\History;
use Carbon\Carbon;
class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $stories = History::all();
        return view('admin.story.index',compact('stories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.story.create');
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

            if(!Storage::disk('public')->exists('story')){
                Storage::disk('public')->makeDirectory('story');
            }
            $storyImage = Image::make($image)->resize(1600,1066)->stream();
            Storage::disk('public')->put('story/'.$imageName,$storyImage);
        }else{

            $imageName = "default.png";
        }
        $story = new History();
        $story->name = $request->name;
        $story->slug = $slug;
        $story->description = $request->description;
        $story->image = $imageName;
        $story->save();
        toastr()->success('Se Registro exitosamente!');
        return redirect()->route('story.index');
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
            //
            $story = History::find($id);
            return view('admin.story.edit',compact('story'));
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
        $story = History::find($id);

        if(isset($image)){

            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('story')){
                Storage::disk('public')->makeDirectory('story');
            }
            // Busqueda y Elimina para la actualizacion de dato
            if(Storage::disk('public')->exists('story/'.$story->image)){
                
                Storage::disk('public')->delete('story/'.$story->image);
            }
            $storyImage = Image::make($image)->resize(500,255)->stream();
            Storage::disk('public')->put('story/'.$imagename, $storyImage);

        }else{
            $imagename = $story->image;
        }


        $story->name = $request->name;
        $story->slug = $slug;
        $story->description = $request->description;
        $story->image = $imagename;
        $story->save();

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
        $story = History::find($id);
        if(Storage::disk('public')->exists('story/'.$story->image)){
            Storage::disk('public')->delete('story/'.$story->image);
        }
        $story->delete();
        toastr()->success('Se Elimino exitosamente!');
        return redirect()->back();
    }
}
