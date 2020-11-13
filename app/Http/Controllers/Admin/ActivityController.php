<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Activity;
use App\Models\Tag;
use Carbon\Carbon;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $activities = Activity::all();
        $tags = Tag::all();
        return view('admin.activity.index',compact('tags','activities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $activity = Activity::all();
        $tags = Tag::all();
        return view('admin.activity.create', compact('activity','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request){

        $this->validate($request, ['title' => 'required' ]);

        $activity = Activity::create([
            'title' => $request->get('title'),
            'url' => str_slug($request->get('title'))
            ]);

        return redirect()->route('admin.activity.edit',$activity);
     }
    // public function store(Request $request)
    // {
    //     //
    //     $this->validate($request, [
    //         'title'=>'required',
    //         'description' => 'required'
    //     ]);
    //     // Post::create($request->all)

    //     $activity = new Activity();
    //     $activity->title = $request->get('title');
    //     $activity->url = Str::slug($request->get('title'));
    //     $activity->description = $request->get('description');
    //     $activity->published_at = $request->has('published_at') ? Carbon::parse($request->get('published_at')) : null;
    //     $activity->url_inscription = $request->get('urlInscription');
    //     $activity->url_base = $request->get('urlBase');
        

    //     if($activity->save()){
    //         $activity->tags()->attach($request->get('tags'));
    //         toastr()->success('Se Registro exitosamente!');
    //         return redirect('admin/activity/create');
        
    //     }
        

        
    // }

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
    public function edit(Activity $activity)
    {
        //
        return view('admin.activity.edit',compact('activity'));

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
    }
}
