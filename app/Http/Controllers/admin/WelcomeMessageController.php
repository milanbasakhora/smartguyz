<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\welcome_message;
use App\Models\WelcomeMessage;
use Illuminate\Http\Request;

class WelcomeMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $welcome_message = WelcomeMessage::first();
        return view('admin.welcome_message.index',compact('welcome_message'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $welcome_message = WelcomeMessage::first();
        if(!empty($welcome_message)){
            return redirect()->route('welcome_message.index');
        }
        return view('admin.welcome_message.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $welcome_message = new WelcomeMessage();
        $welcome_message->title = $request->title;
        $welcome_message->description = $request->description;
        uploadImage($request,$welcome_message,'image');
        $welcome_message->save();
        return redirect()->route('welcome_message.index');
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
        $welcome_message = WelcomeMessage::find($id);
        return view('admin.welcome_message.edit',compact('welcome_message'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $welcome_message = WelcomeMessage::find($id);
        $welcome_message->title = $request->title;
        $welcome_message->description = $request->description;
        uploadImage($request,$welcome_message,'image');
        $welcome_message->update();
        return redirect()->route('welcome_message.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $welcome_message = WelcomeMessage::find($id);
        $welcome_message->delete();
        return redirect()->route('welcome_message.index');
    }
}
