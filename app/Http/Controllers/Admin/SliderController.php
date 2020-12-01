<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use App\Models\Slider;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sliders = Slider::all();
        return view('admin.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.slider.create');
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
            'image' => 'required|mimes:jpeg,bmp,png,jpg',
            'description' => 'required'
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->name);

        if(isset($image)){

            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('slider')){
                Storage::disk('public')->makeDirectory('slider');
            }
            $slider = Image::make($image)->resize(500,255)->stream();
            Storage::disk('public')->put('slider/'.$imagename, $slider);

        
        }else{
            $imagename = "default.png";
        }

        $slider = new Slider();
        $slider->name = $request->name;
        $slider->description = $request->description;
        $slider->slug = $slug;
        $slider->image = $imagename;
        $slider->save();

        toastr()->success('Se Registro exitosamente!');
        return redirect()->route('slider.index');
       
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
        $slider = Slider::find($id);
        return view('admin.slider.edit',compact('slider'));
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
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required'
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->name);
        $slider = Slider::find($id);

        if(isset($image)){

            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('slider')){
                Storage::disk('public')->makeDirectory('slider');
            }
            // Busqueda y Elimina para la actualizacion de dato
            if(Storage::disk('public')->exists('slider/'.$slider->image)){
                
                Storage::disk('public')->delete('slider/'.$slider->image);
            }
            $sliderImage = Image::make($image)->resize(500,255)->stream();
            Storage::disk('public')->put('slider/'.$imagename, $sliderImage);
 

        }else{
            $imagename = $slider->image;
        }


        $slider->name = $request->name;
        $slider->description = $request->description;
        $slider->slug = $slug;
        $slider->image = $imagename;
        $slider->save();

        toastr()->success('Se Actualizo exitosamente!');
        return redirect()->route('slider.index');
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
        $slider = Slider::find($id);
        if(Storage::disk('public')->exists('slider/'.$slider->image)){
            Storage::disk('public')->delete('slider/'.$slider->image);
        }
        $slider->delete();
        toastr()->success('Se Elimino exitosamente!');
        return redirect()->route('slider.index');
    }
}
