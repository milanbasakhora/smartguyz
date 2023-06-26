<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\ActivityImage;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Activity::orderBy('created_at','desc')->get();
        return view('admin.activity.index',compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.activity.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $activity = new Activity();
        $activity->title = $request->title;
        $activity->description = $request->description;
        $activity->save();
        foreach($request->images as $image){
            $activityImage = new ActivityImage();
            $activityImage->activity_id = $activity->id;
            $file = $image;
            $newName = time() . '' . $file->getClientOriginalExtension();
            $file->move('images',$newName);
            $activityImage->image = "images/$newName";
            $activityImage->save();
        }
        toast('Record saved successfully','success');
        return redirect()->route('activity.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $activity = Activity::find($id);
        return view('admin.activity.edit',compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $activity = Activity::find($id);
        $activity->title = $request->title;
        $activity->description = $request->description;
        $activity->update();
        $deleteActivityImage = ActivityImage::where('activity_id',$activity->id);
        $deleteActivityImage->delete();
        foreach($request->images as $image){
            $activityImage = new ActivityImage();
            $activityImage->activity_id = $activity->id;
            $file = $image;
            $newName = time() . '' . $file->getClientOriginalExtension();
            $file->move('images',$newName);
            $activityImage->image = "images/$newName";
            $activityImage->save();
        }
        toast('Record saved successfully','success');
        return redirect()->route('activity.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
