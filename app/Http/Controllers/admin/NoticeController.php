<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notice = Notice::orderBy('created_at','desc')->get();
        return view('admin.notice.index', compact('notice'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.notice.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $notice= new Notice();
        uploadImage($request,$notice,'image');
        $notice->save();
        toast('Record saved successfully','success');
        return redirect()->route('notice.index');
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
        $notice = Notice::find($id);
        return view('admin.notice.edit',compact('notice'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $notice = Notice::find($id);
        uploadImage($request,$notice,'image');
        $notice->update();
        toast('Record updated successfully','success');
        return redirect()->route('notice.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $notice = Notice::find($id);
        $notice->delete();
        toast('Record deleted successfully','success');
        return redirect()->route('notice.index');
    }
}
