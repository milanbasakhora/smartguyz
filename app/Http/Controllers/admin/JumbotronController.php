<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Jumbotron;
use Illuminate\Http\Request;

class JumbotronController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jumbotron = Jumbotron::first();
        return view('admin.jumbotron.index',compact('jumbotron'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jumbotron = Jumbotron::first();
        if(!empty($jumbotron))
        {
            return redirect()->route('jumbotron.index');
        }
        return view('admin.jumbotron.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $jumbotron = new Jumbotron();
        $jumbotron->text1 = $request->text1;
        $jumbotron->text2 = $request->text2;
        $jumbotron->text3 = $request->text3;
        uploadImage($request,$jumbotron,'bgimage');
        $jumbotron->save();
        toast('Record saved successfully','success');
        return redirect()->route('jumbotron.index');
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
        $jumbotron = Jumbotron::find($id);
        return view('admin.jumbotron.edit', compact('jumbotron'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $jumbotron = new Jumbotron();
        $jumbotron->text1 = $request->text1;
        $jumbotron->text2 = $request->text2;
        $jumbotron->text3 = $request->text3;
        uploadImage($request,$jumbotron,'bgimage');
        $jumbotron->update();
        toast('Record updated successfully','success');
        return redirect()->route('jumbotron.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jumbotron = Jumbotron::find($id);
        $jumbotron->delete();
        return redirect()->route('jumbotron.index');
    }
}
