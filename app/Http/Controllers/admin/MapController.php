<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Map;
use Illuminate\Http\Request;

class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $map = Map::first();
        return view('admin.map.index',compact('map'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $map = Map::first();
        if(!empty($map))
        {
            return redirect()->route('map.index');
        }
        return view('admin.map.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $map = new Map();
        $map->latitude = $request->latitude;
        $map->longitude = $request->longitude;
        $map->zoomlevel = $request->zoomlevel;
        $map->save();
        toast('Record saved successfully','success');
        return redirect()->route('map.index');
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
        $map = Map::find($id);
        return view('admin.map.edit',compact('map'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $map = Map::find($id);
        $map->latitude = $request->latitude;
        $map->longitude = $request->longitude;
        $map->zoomlevel = $request->zoomlevel;
        $map->update();
        toast('Record updated successfully','success');
        return redirect()->route('map.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $map = Map::find($id);
        $map->delete();
        toast('Record deleted successfully','success');
        return redirect()->route('map.index');
    }
}
