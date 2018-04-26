<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;


class ProjectController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
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
         $user = Auth::User();
      $image = $request->file('file');
      $input['filename'] = time().'.'.$image->getClientOriginalExtension();
      $destinationPath = public_path('/images');
      $image->move($destinationPath, $input['filename']);


        Project::create([
          'user_id' => $user->id,
          'project_name' => $request['title'],
          'caver_url' => $input['filename'],
          'description' => $request['content'],
        ]);
        //  x = $request['user_id'];
        // return x;
        // return redirect()->to(url('prof/'));
        return redirect('prof');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $pro = Project::find($project->id);
        return view('pro-edit',compact('pro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(!empty($request->file('proimage')))
        {
        $image = $request->file('proimage');
        $input['filename'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['filename']);

            Project::find($id)->update([
            'project_name'=>$request->proname,
            'caver_url'=>$input['filename'],
        ]);

    }
    else{
        Project::find($id)->update([
            'project_name'=>$request->proname,
        ]);
    }
         
        
        
        Session::flash('success','updated at');
        return redirect()->back();
        //return redirect('prof');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Project::destroy($id);
        Session::flash('success','deleted at');
        return redirect()->back();
    }
}
