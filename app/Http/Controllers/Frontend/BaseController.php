<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Activity;
use App\Models\Banner;
use App\Models\BoardMember;
use App\Models\Company;
use App\Models\Editorial;
use App\Models\Jumbotron;
use App\Models\Map;
use App\Models\Member;
use App\Models\Privacy;
use App\Models\Term;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public function __construct()
    {
        $company = Company::first();
        $jumbotron = Jumbotron::first();
        $aboutus = AboutUs::first();
        $activities = Activity::orderBy('created_at', 'desc')->paginate(4);
        $boardmembers = BoardMember::all();
        $editorials = Editorial::all();
        $members = Member::all();
        $terms = Term::first();
        $privacy = Privacy::first();
        $banners = Banner::all();
        $map = Map::first();
        View::share([
            'company' => $company,
            'jumbotron' => $jumbotron,
            'aboutus' => $aboutus,
            'activities' => $activities,
            'boardmembers' => $boardmembers,
            'editorials' => $editorials,
            'members' => $members,
            'terms' => $terms,
            'privacy' => $privacy,
            'banners' => $banners,
            'map' => $map,
        ]);
    }
}
