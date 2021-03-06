<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Experience;
use App\Post;
use App\Project;
use App\User;
use App\Comment;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           $user = Auth::User();
         $experience = Experience::where('user_id', $user->id)->get();
        $project = Project::where('user_id', $user->id)->get();
     
        return view('profile', compact('project', 'experience','user'));
    }

    public function profile()
    {
        $user = Auth::user();
        $experience = Experience::where('user_id', $user->id)->get();
        $project = Project::where('user_id', $user->id)->get();
        
        
        return view('profile', compact('project', 'experience','user'));
    }

    public function timeline()
    {
        // $experience = Experience::where('user_id', $id)->get();
         $post = Post::orderBy('created_at','DESC')->get();
         //$post = Post::orderBy('created_at','ASC')->get();
         $user = Auth::user();
         $comment = Comment::all();
        return view('index', compact('post', 'comment','user'));
    }

}
