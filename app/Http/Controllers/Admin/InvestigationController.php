<?php

namespace App\Http\Controllers\Admin;

use App\Models\Investigation;
use Carbon\Carbon;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class InvestigationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $investigations = Investigation::latest()->get();
        return view('admin.investigation.index',compact('investigations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.investigation.create');
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
        $this->validate($request,[
            'name' => 'required',
            'image' => 'required|mimes:jpeg,bmp,png,jpg'
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->name);

        if(isset($image)){

            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('investigation')){
                Storage::disk('public')->makeDirectory('investigation');
            }
            $investigation = Image::make($image)->resize(500,255)->stream();
            Storage::disk('public')->put('investigation/'.$imagename, $investigation);

            
            if(!Storage::disk('public')->exists('investigation/slider')){
                Storage::disk('public')->makeDirectory('investigation/slider');
            }
            $slider = Image::make($image)->resize(500,255)->stream();
            Storage::disk('public')->put('investigation/slider/'.$imagename, $slider);
        }else{
            $imagename = "default.png";
        }

        $investigation = new Investigation();
        $investigation->name = $request->name;
        $investigation->description = $request->description;
        $investigation->slug = $slug;
        $investigation->image = $imagename;
        $investigation->save();

        toastr()->success('Se Registro exitosamente!');
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
        $investigation = Investigation::find($id);
        return view('admin.investigation.edit',compact('investigation'));
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
         //
         $this->validate($request,[
            'name' => 'required',
            'image' => 'required|mimes:jpeg,bmp,png,jpg'
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->name);
        $investigation = Investigation::find($id);

        if(isset($image)){

            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('investigation')){
                Storage::disk('public')->makeDirectory('investigation');
            }
            // Busqueda y Elimina para la actualizacion de dato
            if(Storage::disk('public')->exists('investigation/'.$investigation->image)){
                
                Storage::disk('public')->delete('investigation/'.$investigation->image);
            }
            $investigationImage = Image::make($image)->resize(500,255)->stream();
            Storage::disk('public')->put('investigation/'.$imagename, $investigationImage);

            
            if(!Storage::disk('public')->exists('investigation/slider')){
                Storage::disk('public')->makeDirectory('investigation/slider');
            }
            // Busqueda y actulizacion del image del slider
            if(Storage::disk('public')->exists('investigation/slider/'.$investigation->image)){
                
                Storage::disk('public')->delete('investigation/slider/'.$investigation->image);
            }
            $slider = Image::make($image)->resize(500,255)->stream();
            Storage::disk('public')->put('investigation/slider/'.$imagename, $slider);
        }else{
            $imagename = $investigation->image;
        }


        $investigation->name = $request->name;
        $investigation->description = $request->description;
        $investigation->slug = $slug;
        $investigation->image = $imagename;
        $investigation->save();

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
        $investigation = Investigation::find($id);
        if(Storage::disk('public')->exists('investigation/'.$investigation->image)){
            Storage::disk('public')->delete('investigation/'.$investigation->image);
        }
        if(Storage::disk('public')->exists('investigation/slider/'.$investigation->image)){
            Storage::disk('public')->delete('investigation/slider/'.$investigation->image);
        }
        $investigation->delete();
        toastr()->success('Se Elimino exitosamente!');
        return redirect()->back();
    }
}
