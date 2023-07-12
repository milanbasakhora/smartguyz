<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Privacy;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $privacy = Privacy::first();
        return view('admin.privacy.index',compact('privacy'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $privacy = Privacy::first();
        if(!empty($privacy))
        {
            return redirect()->route('privacy.index');
        }
        return view('admin.privacy.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $privacy = new Privacy();
        $privacy->title = $request->title;
        $privacy->content = $request->content;
        $privacy->save();
        return redirect()->route('privacy.index');
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
        $privacy = Privacy::find($id);
        return view('admin.privacy.edit', compact('privacy'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $privacy = Privacy::find($id);
        $privacy->title = $request->title;
        $privacy->content = $request->content;
        $privacy->update();
        return redirect()->route('privacy.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $privacy = Privacy::find($id);
        $privacy->delete();
        return redirect()->route('privacy.index');
    }
}
