<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Comment;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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
        $oldactivities = Activity::all();
        return view('frontend.pages.blog',compact('oldactivities'));
    }

    public function blogdetails($slug)
    {
        $blog = Activity::where('slug', $slug)->first();
        $newactivities = Activity::orderBy('created_at', 'desc')->get();
        $oldactivities = Activity::all();
        $comments = $blog->comments;
        $comments->each(function ($comment) {
            $comment->loadNestedReplies();
        });
        return view('frontend.pages.blog-details', compact('blog','newactivities','oldactivities','comments'));
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
    public function members()
    {
        return view('frontend.pages.members');
    }

    public function postMember(Request $request)
    {
        $member = new Member();
        $member->name = $request->name;
        $member->address = $request->address;
        $member->message = $request->message;
        $member->phone = $request->phone;
        $member->email = $request->email;
        uploadImage($request,$member,'image');
        $member->save();
        toast('Request sent successfully','success');
        return redirect()->back();
    }

    public function postMessage(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        toast('Message sent successfully','success');
        return redirect()->back();
    }

    public function postComment(Request $request)
    {
        $user = Auth::user();
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->activity_id = $request->activity_id;
        $comment->user_id = $user->id;
        $comment->name = $user->name;
        $comment->save();
        toast('Comment added successfully','success');
        return redirect()->back();
    }

    public function replyComment(Request $request)
    {
        $user = Auth::user();
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->activity_id = $request->activity_id;
        $comment->parent_id = $request->parent_id;
        $comment->user_id = $user->id;
        $comment->name = $user->name;
        $comment->save();
        toast('Comment added successfully','success');
        return redirect()->back();
    }

    public function editComment(Request $request, $id)
    {
        $comment = Comment::find($id);

        // Make sure the comment exists before proceeding with the update
        if (!$comment) {
            abort(404); // Or handle the case where the comment doesn't exist
        }
        $comment->comment = $request->comment;
        $comment->update();

        toast('Comment updated successfully', 'success');
        return redirect()->back();
    }

    public function deleteComment(Request $request, $id)
    {
        $comment = Comment::find($id);

        // Make sure the comment exists before proceeding with the update
        if (!$comment) {
            abort(404); // Or handle the case where the comment doesn't exist
        }
        $comment->delete();

        toast('Comment deleted successfully', 'success');
        return redirect()->back();
    }
}
