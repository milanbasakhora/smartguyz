<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BoardMember;
use Illuminate\Http\Request;

class BoardMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $boardmembers = BoardMember::all();
        return view('admin.boardmember.index',compact('boardmembers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.boardmember.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $boardmember = new BoardMember();
        $boardmember->name = $request->name;
        $boardmember->address = $request->address;
        $boardmember->phone = $request->phone;
        $boardmember->email = $request->email;
        $boardmember->designation = $request->designation;
        uploadImage($request,$boardmember,'image');
        $boardmember->save();
        toast('Record saved successfully','success');
        return redirect()->route('boardmember.index');
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
        $boardmember = BoardMember::find($id);
        return view('admin.boardmember.edit',compact('boardmember'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $boardmember = BoardMember::find($id);
        $boardmember->name = $request->name;
        $boardmember->address = $request->address;
        $boardmember->phone = $request->phone;
        $boardmember->email = $request->email;
        $boardmember->designation = $request->designation;
        uploadImage($request,$boardmember,'image');
        $boardmember->update();
        toast('Record updated successfully','success');
        return redirect()->route('boardmember.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $boardmember = BoardMember::find($id);
        $boardmember->delete();
        toast('Record deleted successfully','success');
        return redirect()->route('boardmember.index');
    }
}
