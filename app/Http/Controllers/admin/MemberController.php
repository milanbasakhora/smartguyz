<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\MemberCategory;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::all();
        return view('admin.member.index',compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.member.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $member = new Member();
        $member->name = $request->name;
        $member->address = $request->address;
        $member->message = $request->message;
        $member->phone = $request->phone;
        $member->email = $request->email;
        uploadImage($request,$member,'image');
        $member->save();
        toast('Request sent successfully','success');
        return redirect()->back();
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
        $member = Member::find($id);
        return view('admin.member.edit',compact('member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $member = Member::find($id);
        $member->name = $request->name;
        $member->address = $request->address;
        $member->status = $request->status;
        $member->phone = $request->phone;
        $member->email = $request->email;
        uploadImage($request,$member,'image');
        $member->update();
        toast('Record updated successfully','success');
        return redirect()->route('member.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $member = Member::find($id);
        $member->delete();
        toast('Record deleted successfully','success');
        return redirect()->route('member.index');
    }
}
