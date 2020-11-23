<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Activity;
use App\Models\Tag;
use App\Models\Photo;
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
    // public function create()
    // {
    //     //
    //     // $activity = Activity::all();
    //     $tags = Tag::all();
    //     return view('admin.activity.create', compact('tags'));
    // }

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
            'url' => Str::slug($request->get('title'))
            ]);

        return redirect()->route('admin.activity.edit',$activity);
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
    public function edit(Activity $activity)
    {
        //
        
       
        $tags = Tag::all();
        return view('admin.activity.edit', compact('tags','activity'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Activity $activity, Request $request)
    {
        //
        $this->validate($request, [
            'title'=>'required',
            'description' => 'required'
        ]);
        // Post::create($request->all)

        $activity->title = $request->get('title');
        $activity->url = Str::slug($request->get('title'));
        $activity->description = $request->get('description');
        $activity->published_at = $request->has('published_at') ? Carbon::parse($request->get('published_at')) : null;
        $activity->url_inscription = $request->get('url_inscription');
        $activity->url_base = $request->get('url_base');
        

        if($activity->save()){
            $activity->tags()->sync($request->get('tags'));
            toastr()->success('Se Registro exitosamente!');
            return redirect()->back();
        
        }
        
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
