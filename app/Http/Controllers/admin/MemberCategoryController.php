<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\MemberCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MemberCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $membercategories =  MemberCategory::all();
        return view('admin.membercategory.index',compact('membercategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.membercategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|unique:member_categories,type'
        ]);

        $membercategory=new MemberCategory();
        $membercategory->type=$request->type;
        $membercategory->slug= Str::slug($request->type);
        $membercategory->save();
        toast('Record saved successfully','success');
        return redirect()->route('membercategory.index');
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
        $membercategory =  MemberCategory::find($id);
        return view('admin.membercategory.edit',compact('membercategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $membercategory=MemberCategory::find($id);
        $membercategory->type=$request->type;
        $membercategory->slug= Str::slug($request->type);
        $membercategory->save();
        toast('Record saved successfully','success');
        return redirect()->route('membercategory.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $membercategory = MemberCategory::find($id);
        $membercategory->delete();
        toast('Record deleted successfully','success');
        return redirect()->route('member.index');
    }
}
