<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $requests = Member::where('status','inactive')->get();
        $contacts = Contact::all();
        $comments = Comment::all();
        $users = User::all();
        return view('admin.dashboard',compact('requests','contacts','comments','users'));
    }
}
