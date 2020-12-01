<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Objective;

class ObjetiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $objectives = Objective::all();
        return view('admin.objective.index',compact('objectives'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.objective.create');
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
        //
        $this->validate($request, [
            'icon'=>'required',
            'name'=>'required',
            'description'=>'required',
        ]);
        $objective = new Objective();
        $objective->icon = $request->icon;
        $objective->name = $request->name;
        $objective->description = $request->description;
        $objective->save();
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
         //
         $objective  = Objective::find($id);
         return view('admin.objective.edit',compact('objective'));

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
            'icon'=>'required',
            'name'=>'required',
            'description'=>'required',
        ]);
        $objective  = Objective::find($id);
        $objective->icon = $request->icon;
        $objective->name = $request->name;
        $objective->description = $request->description;
        $objective->save();
        toastr()->success('Se Actualizo exitosamente!');
        return redirect()->route('objective.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Objective::destroy($id)){
            toastr()->success('Se Elimino exitosamente!');
            return redirect()->back();
        }
        return redirect()->back();
    }
}
