<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutus = AboutUs::first();
        return view('admin.aboutus.index',compact('aboutus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $aboutus = AboutUs::first();
        if(!empty($aboutus)){
            return redirect()->route('admin.aboutus.index');
        }
        return view('admin.aboutus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $aboutus = new AboutUs();
        $aboutus->title = $request->title;
        uploadImage($request,$aboutus,'image');
        $aboutus->description = $request->description;
        $aboutus->save();
        return redirect()->route('aboutus.index');
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
        $aboutus = AboutUs::find($id);
        return view('admin.aboutus.edit',compact('aboutus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $aboutus = AboutUs::find($id);
        $aboutus->title = $request->title;
        uploadImage($request,$aboutus,'image');
        $aboutus->description = $request->description;
        $aboutus->update();
        return redirect()->route('aboutus.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aboutus = AboutUs::find($id);
        $aboutus->delete();
        return redirect()->route('admin.aboutus.index');
    }
}
