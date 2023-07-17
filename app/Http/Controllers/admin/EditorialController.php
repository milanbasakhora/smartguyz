<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Editorial;
use Illuminate\Http\Request;

class EditorialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $editorials = Editorial::all();
        return view('admin.editorial.index',compact('editorials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.editorial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $editorial = new Editorial();
        $editorial->name = $request->name;
        $editorial->address = $request->address;
        $editorial->phone = $request->phone;
        $editorial->email = $request->email;
        $editorial->designation = $request->designation;
        uploadImage($request,$editorial,'image');
        $editorial->save();
        toast('Record saved successfully','success');
        return redirect()->route('editorial.index');
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
        $editorial = Editorial::find($id);
        return view('admin.editorial.edit',compact('editorial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $editorial = Editorial::find($id);
        $editorial->name = $request->name;
        $editorial->address = $request->address;
        $editorial->phone = $request->phone;
        $editorial->email = $request->email;
        $editorial->designation = $request->designation;
        uploadImage($request,$editorial,'image');
        $editorial->update();
        toast('Record updated successfully','success');
        return redirect()->route('editorial.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $editorial = Editorial::find($id);
        $editorial->delete();
        toast('Record deleted successfully','success');
        return redirect()->route('editorial.index');
    }
}
