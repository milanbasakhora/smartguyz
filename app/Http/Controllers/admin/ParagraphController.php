<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Paragraph;
use Illuminate\Http\Request;

class ParagraphController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paragraph = Paragraph::first();
        return view('admin.paragraph.index',compact('paragraph'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $paragraph = Paragraph::first();
        if(!empty($paragraph))
        {
            return redirect()->route('paragraph.index');
        }
        return view('admin.paragraph.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $paragraph = new Paragraph();
        $paragraph->title = $request->title;
        $paragraph->content = $request->content;
        $paragraph->save();
        return redirect()->route('paragraph.index');
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
        $paragraph = Paragraph::find($id);
        return view('admin.paragraph.edit', compact('paragraph'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $paragraph = Paragraph::find($id);
        $paragraph->title = $request->title;
        $paragraph->content = $request->content;
        $paragraph->update();
        return redirect()->route('paragraph.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $paragraph = Paragraph::find($id);
        $paragraph->delete();
        return redirect()->route('paragraph.index');
    }
}
