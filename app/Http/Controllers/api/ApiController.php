<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AboutUsResource;
use App\Http\Resources\ActivityResource;
use App\Http\Resources\CarouselController;
use App\Http\Resources\CarouselResource;
use App\Models\Company;
use App\Http\Resources\CompanyResource;
use App\Http\Resources\NoticeResource;
use App\Http\Resources\WelcomeMessageResource;
use App\Models\AboutUs;
use App\Models\Activity;
use App\Models\Carousel;
use App\Models\Member;
use App\Models\Notice;
use App\Models\WelcomeMessage;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class ApiController extends Controller
{
    public function getCompany()
    {
        $company = Company::first();
        return new CompanyResource($company);
    }

    public function getWelcomeMessage()
    {
        $welcomemessage = WelcomeMessage::first();
        return new WelcomeMessageResource($welcomemessage);
    }

    public function getAboutUs()
    {
        $aboutus = AboutUs::first();
        return new AboutUsResource($aboutus);
    }

    public function getCarousel()
    {
        $carousels = Carousel::all();
        return CarouselResource::collection($carousels);
    }

    public function getNotice()
    {
        $notices = Notice::all();
        return NoticeResource::collection($notices);
    }

    public function getActivity()
    {
        $activities = Activity::all();
        return ActivityResource::collection($activities);
    }

}
