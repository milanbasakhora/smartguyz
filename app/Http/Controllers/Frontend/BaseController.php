<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Activity;
use App\Models\BoardMember;
use App\Models\Company;
use App\Models\Jumbotron;
use App\Models\Member;
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
        $members = Member::all();
        View::share([
            'company' => $company,
            'jumbotron' => $jumbotron,
            'aboutus' => $aboutus,
            'activities' => $activities,
            'boardmembers' => $boardmembers,
            'members' => $members,
        ]);
    }
}
