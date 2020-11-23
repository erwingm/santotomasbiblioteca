<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Photo;

class PhotoController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Activity $activity)
    {
        //
        $this->validate(request(),[
            'photo' => 'required|image|max:1024'
        ]);

        $photo = request()->file('photo')->store('public');


       Photo::create([
           'url' => Storage::url($photo),
           'activity_id'=> $activity->id,
       ]);
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
        $this->validate(request(),[
            'photo' => 'required|image|max:2048'
        ]);

        $photo = request()->file('photo')->store('public');


       Photo::update([
           'url' => Storage::url($photo),
           'activity_id'=> $activity->id,
       ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        //
        $photo->delete();
        $photoPath = str_replace('storage', 'public', $photo->url);
        Storage::delete($photoPath);
        toastr()->success('Se Elimino exitosamente!');
        return redirect()->back();
    }

}
