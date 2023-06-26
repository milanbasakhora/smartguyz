<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus =  Menu::orderBy('position','asc')->get();
        return view('admin.menu.index',compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menu=Menu::orderBy('id','desc')->first();
        if((empty($menu)))
        {
            $menu_id = 1;
        }
        else{
            $menu_id = $menu->id + 1;
        }
        return view('admin.menu.create',compact('menu_id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $menu=new Menu();
        $menu->name=$request->name;
        $menu->slug= Str::slug($request->name);
        $menu->position=$request->position;
        $menu->save();
        toast('Record saved successfully','success');
        return redirect()->route('menu.index');
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
        $menu= Menu::find($id);
        return view('admin.menu.edit',compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $menu=Menu::find($id);
        $menu->name=$request->name;
        $menu->slug= Str::slug($request->name);
        $menu->position=$request->position;
        $menu->update();
        toast('Record updated successfully','success');
        return redirect()->route('menu.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menu=Menu::find($id);
        $menu->delete();
        toast("Record deleted successfully", "success");
        return redirect()->route('menu.index');
    }
}
