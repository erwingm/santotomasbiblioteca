<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Editorial;

class EditorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $editorials = Editorial::all();
        return view('admin.editorial.index', compact('editorials'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.editorial.create');
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
            'editorialName'=>'required',
        ]);
        $editorial = new Editorial();
        $editorial->name = $request->input('editorialName');
        if($editorial->save()){
            toastr()->success('Se Registro exitosamente!');
            return redirect('admin/editorial');
        }
        toastr()->success('Se Algo paso exitosamente!');
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
        $editorial = Editorial::find($id);
        return view('admin.editorial.edit', compact('editorial'));
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
            'editorialName'=>'required',
        ]);
        $editorial = Editorial::find($id);
        $editorial->name = $request->input('editorialName');
        if($editorial->save()){
            toastr()->success('Se Actualizo exitosamente!');
            return redirect('admin/editorial');
        }
        toastr()->success('Se Algo apso exitosamente!');
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

        if(Editorial::destroy($id)){
            toastr()->success('Se Elimino exitosamente!');
            return redirect('admin/editorial');
        }
    }
}
