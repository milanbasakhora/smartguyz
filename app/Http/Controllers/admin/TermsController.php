<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Term;
use Illuminate\Http\Request;

class TermsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $terms = Term::first();
        return view('admin.terms.index',compact('terms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $terms = Term::first();
        if(!empty($terms))
        {
            return redirect()->route('terms_and_conditions.index');
        }
        return view('admin.terms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $terms = new Term();
        $terms->title = $request->title;
        $terms->content = $request->content;
        $terms->save();
        return redirect()->route('terms_and_conditions.index');
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
        $terms = Term::find($id);
        return view('admin.terms.edit',compact('terms'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $terms = Term::find($id);
        $terms->title = $request->title;
        $terms->content = $request->content;
        $terms->update();
        return redirect()->route('terms_and_conditions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $terms = Term::find($id);
        $terms->delete();
        return redirect()->route('terms_and_conditions.index');
    }
}
