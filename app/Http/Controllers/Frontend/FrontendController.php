<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
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
        return view('frontend.pages.blog');
    }

    public function blogdetails()
    {
        return view('frontend.pages.blog-details');
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
