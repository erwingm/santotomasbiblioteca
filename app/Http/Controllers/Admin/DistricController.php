<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Distric;

class DistricController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $districs = Distric::all();
        return view('admin.distric.index', compact('districs')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.distric.create');
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
        $this->validate($request, [
            'districName'=>'required',
        ]);
        $distric = new Distric();
        $distric->name = $request->input('districName');
        if($distric->save()){
            toastr()->success('Se Registro exitosamente!');
            return redirect('admin/distric');
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
        $distric = Distric::find($id);
        return view('admin.distric.edit', compact('distric'));
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
        $this->validate($request, [
            'districName'=>'required',
        ]);
        $distric = Distric::find($id);
        $distric->name = $request->input('districName');
        if($distric->save()){
            toastr()->success('Se Actualizo exitosamente!');
            return redirect('admin/distric');
        }
        toastr()->error('Error Message');
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
        if(Distric::destroy($id)){
            toastr()->success('Se Elimino exitosamente!');
            return redirect('admin/distric');
        }
    }
}
