<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Company;
use Illuminate\Http\Request;

class FrontendController extends BaseController
{
    public function home()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function team()
    {
        return view('frontend.pages.team');
    }

    public function blog()
    {
        $newactivities = Activity::all();
        return view('frontend.pages.blog',compact('newactivities'));
    }

    public function blogdetails($slug)
    {
        $blog = Activity::where('slug', $slug)->first();
        return view('frontend.pages.blog-details', compact('blog'));
    }


    public function contact()
    {
        return view('frontend.pages.contact');
    }
    public function editorialteam()
    {
        return view('frontend.pages.editorial-team');
    }
    public function gallery()
    {
        return view('frontend.pages.gallery');
    }
    public function notices()
    {
        return view('frontend.pages.notices');
    }
    public function terms()
    {
        return view('frontend.pages.terms');
    }
    public function privacy()
    {
        return view('frontend.pages.privacy');
    }
}
