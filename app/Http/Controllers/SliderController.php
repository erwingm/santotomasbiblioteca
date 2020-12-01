<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
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
        return view('slider.slider',compact('sliders'));
    }


}
