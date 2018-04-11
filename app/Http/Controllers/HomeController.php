<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Experience;
use App\Project;
use App\User;

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
}
