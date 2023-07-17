<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner = Banner::first();
        return view('admin.banner.index',compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $banner = Banner::first();
        if(!empty($banner)){
            return redirect()->route('admin.banner.index');
        }
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $banner = new Banner();
        uploadImage($request,$banner,'about');
        uploadImage($request,$banner,'team');
        uploadImage($request,$banner,'blog');
        uploadImage($request,$banner,'contact');
        uploadImage($request,$banner,'gallery');
        uploadImage($request,$banner,'notice');
        uploadImage($request,$banner,'editorial');
        uploadImage($request,$banner,'members');
        uploadImage($request,$banner,'terms');
        uploadImage($request,$banner,'privacy');
        $banner->save();
        toast('Record saved successfully','success');
        return redirect()->route('banner.index');
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
        $banner = Banner::find($id);
        return view('admin.banner.edit',compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $banner = Banner::find($id);
        uploadImage($request,$banner,'about');
        uploadImage($request,$banner,'team');
        uploadImage($request,$banner,'blog');
        uploadImage($request,$banner,'contact');
        uploadImage($request,$banner,'gallery');
        uploadImage($request,$banner,'notice');
        uploadImage($request,$banner,'editorial');
        uploadImage($request,$banner,'members');
        uploadImage($request,$banner,'terms');
        uploadImage($request,$banner,'privacy');
        $banner->update();
        toast('Record updated successfully','success');
        return redirect()->route('banner.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $banner = Banner::find($id);
        $banner->delete();
        toast('Record deleted successfully','success');
        return redirect()->route('banner.index');
    }
}
