<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\ActivityImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Activity::orderBy('created_at', 'desc')->get();
        return view('admin.activity.index', compact('activities'));
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
        // dd($request->all());
        $activity = new Activity();
        $activity->title = $request->title;
        $activity->slug = Str::slug($request->title);
        $activity->description = $request->description;
        $activity->save();
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $index => $image) {
                $newName = time() . $index . '.' . $image->getClientOriginalExtension();
                $image->move('images', $newName);

                $activityImage = new ActivityImage();
                $activityImage->image = "images/$newName";
                $activity->activity_images()->save($activityImage);
            }
        }

        toast('Record saved successfully', 'success');
        return redirect()->route('activity.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $activities = Activity::find($id)->with('activity_images')->get();
        return view('admin.activity.show', compact('activities'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $activity = Activity::find($id);
        return view('admin.activity.edit', compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $activity = Activity::find($id);
        $activity->title = $request->title;
        $activity->slug = Str::slug($request->title);
        $activity->description = $request->description;
        $activity->update();
        $deleteActivityImage = ActivityImage::where('activity_id', $activity->id);
        if ($request->hasFile('images')) {
            $deleteActivityImage->delete();
            foreach ($request->file('images') as $index => $image) {
                $newName = time() . $index . '.' . $image->getClientOriginalExtension();
                $image->move('images', $newName);
                $activityImage = new ActivityImage();
                $activityImage->image = "images/$newName";
                $activity->activity_images()->save($activityImage);
            }
        }
        toast('Record saved successfully', 'success');
        return redirect()->route('activity.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $activity = Activity::find($id);
        $activity->delete();
        toast('Record deleted successfully', 'success');
        return redirect()->route('activity.index');
    }
}
