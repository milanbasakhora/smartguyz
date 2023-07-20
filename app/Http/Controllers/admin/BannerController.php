<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner = Banner::first();
        return view('admin.banner.index',compact('banner'));
    }

    /**
     * Show the banner for creating a new resource.
     */
    public function create()
    {
        $banner = Banner::first();
        if(!empty($banner)){
            return redirect()->route('admin.banner.index');
        }
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $banner = new Banner();
        if ($request->hasFile('about')) {
            $about = $request->about;
            $newName = 'about' . time() . "." . $about->getClientOriginalExtension();
            $about->move('images', $newName);
            $banner->about = 'images/' . $newName;
        }

        if ($request->hasFile('team')) {
            $team = $request->team;
            $newName = 'team' . time() . "." . $team->getClientOriginalExtension();
            $team->move('images', $newName);
            $banner->team = 'images/' . $newName;
        }

        if ($request->hasFile('blog')) {
            $blog = $request->blog;
            $newName = 'blog' . time() . "." . $blog->getClientOriginalExtension();
            $blog->move('images', $newName);
            $banner->blog = 'images/' . $newName;
        }

        if ($request->hasFile('contact')) {
            $contact = $request->contact;
            $newName = 'contact' . time() . "." . $contact->getClientOriginalExtension();
            $contact->move('images', $newName);
            $banner->contact = 'images/' . $newName;
        }
        if ($request->hasFile('gallery')) {
            $gallery = $request->gallery;
            $newName = 'gallery' . time() . "." . $gallery->getClientOriginalExtension();
            $gallery->move('images', $newName);
            $banner->gallery = 'images/' . $newName;
        }
        if ($request->hasFile('notice')) {
            $notice = $request->notice;
            $newName = 'notice' . time() . "." . $notice->getClientOriginalExtension();
            $notice->move('images', $newName);
            $banner->notice = 'images/' . $newName;
        }
        if ($request->hasFile('editorial')) {
            $editorial = $request->editorial;
            $newName = 'editorial' . time() . "." . $editorial->getClientOriginalExtension();
            $editorial->move('images', $newName);
            $banner->editorial = 'images/' . $newName;
        }
        if ($request->hasFile('members')) {
            $members = $request->members;
            $newName = 'members' . time() . "." . $members->getClientOriginalExtension();
            $members->move('images', $newName);
            $banner->members = 'images/' . $newName;
        }
        if ($request->hasFile('terms')) {
            $terms = $request->terms;
            $newName = 'terms' . time() . "." . $terms->getClientOriginalExtension();
            $terms->move('images', $newName);
            $banner->terms = 'images/' . $newName;
        }
        if ($request->hasFile('privacy')) {
            $privacy = $request->privacy;
            $newName = 'privacy' . time() . "." . $privacy->getClientOriginalExtension();
            $privacy->move('images', $newName);
            $banner->privacy = 'images/' . $newName;
        }
        $banner->save();
        toast('Record saved successfully','success');
        return redirect()->route('banner.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the banner for editing the specified resource.
     */
    public function edit(string $id)
    {
        $banner = Banner::find($id);
        return view('admin.banner.edit',compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $banner = Banner::find($id);
        if ($request->hasFile('about')) {
            $about = $request->about;
            $newName = 'about' . time() . "." . $about->getClientOriginalExtension();
            $about->move('images', $newName);
            $banner->about = 'images/' . $newName;
        }

        if ($request->hasFile('team')) {
            $team = $request->team;
            $newName = 'team' . time() . "." . $team->getClientOriginalExtension();
            $team->move('images', $newName);
            $banner->team = 'images/' . $newName;
        }

        if ($request->hasFile('blog')) {
            $blog = $request->blog;
            $newName = 'blog' . time() . "." . $blog->getClientOriginalExtension();
            $blog->move('images', $newName);
            $banner->blog = 'images/' . $newName;
        }

        if ($request->hasFile('contact')) {
            $contact = $request->contact;
            $newName = 'contact' . time() . "." . $contact->getClientOriginalExtension();
            $contact->move('images', $newName);
            $banner->contact = 'images/' . $newName;
        }
        if ($request->hasFile('gallery')) {
            $gallery = $request->gallery;
            $newName = 'gallery' . time() . "." . $gallery->getClientOriginalExtension();
            $gallery->move('images', $newName);
            $banner->gallery = 'images/' . $newName;
        }
        if ($request->hasFile('notice')) {
            $notice = $request->notice;
            $newName = 'notice' . time() . "." . $notice->getClientOriginalExtension();
            $notice->move('images', $newName);
            $banner->notice = 'images/' . $newName;
        }
        if ($request->hasFile('editorial')) {
            $editorial = $request->editorial;
            $newName = 'editorial' . time() . "." . $editorial->getClientOriginalExtension();
            $editorial->move('images', $newName);
            $banner->editorial = 'images/' . $newName;
        }
        if ($request->hasFile('members')) {
            $members = $request->members;
            $newName = 'members' . time() . "." . $members->getClientOriginalExtension();
            $members->move('images', $newName);
            $banner->members = 'images/' . $newName;
        }
        if ($request->hasFile('terms')) {
            $terms = $request->terms;
            $newName = 'terms' . time() . "." . $terms->getClientOriginalExtension();
            $terms->move('images', $newName);
            $banner->terms = 'images/' . $newName;
        }
        if ($request->hasFile('privacy')) {
            $privacy = $request->privacy;
            $newName = 'privacy' . time() . "." . $privacy->getClientOriginalExtension();
            $privacy->move('images', $newName);
            $banner->privacy = 'images/' . $newName;
        }
        $banner->update();
        toast('Record updated successfully','success');
        return redirect()->route('banner.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $banner = Banner::find($id);
        $banner->delete();
        toast('Record deleted successfully','success');
        return redirect()->route('banner.index');
    }
}
