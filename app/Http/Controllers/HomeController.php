<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Experience;
use App\Post;
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
        return view('home');
    }

    public function profile($id)
    {
        $experience = Experience::where('user_id', $id)->get();
        $project = Project::where('user_id', $id)->get();
        $user = User::where('id', $id)->get();
        //dd($experience);
        return view('profile', compact('project', 'experience','user'));
    }

    public function timeline()
    {
        // $experience = Experience::where('user_id', $id)->get();
         $post = Post::all();
         $user = Auth::user();
         $comment = Comment::all();
        return view('index', compact('post', 'comment','user'));
    }


}
