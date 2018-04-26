<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Experience;
use App\Post;
use App\Project;
use App\User;
use App\Comment;
use Hash;
use DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = Auth::User();
        return view('edit-profile', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = Auth::User();
        $experience = Experience::where('user_id', $user->id)->get();
        $project = Project::where('user_id', $user->id)->get();
        if(!empty($request->file('image')))
        {
        $image = $request->file('image');
        $input['filename'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['filename']);
        }

        $u = User::find($user->id);
        $u->first_name = $request->firstname;
        $u->last_name = $request->lastname;
        $u->phone = $request->phone;
        if(!empty($request->file('image')))
        {
        $u->image = $input['filename'];}
        if(!empty($request->password)){
        $u->password = Hash::make($request->password);}
        $u->save();

        // return view('profile', compact('user','experience','project'));
        return redirect()->route('prof');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
