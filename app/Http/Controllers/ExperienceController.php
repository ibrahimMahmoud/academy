<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ExperienceRequest;
use App\Experience;
use Auth;
use Session;

class ExperienceController extends Controller
{
    public function index()
    {
        $experinces = Experience::with('user')->get();
        
        return view('experince.index',compact('experinces'));
    }

    public function create()
    {
        return view('experince.create');
    }
    public function store(ExperienceRequest $request)
    {
        if($request->CurrentlyWork == "on"){
            $currentlyWork = '1';
        }else{
            $currentlyWork = '0';            
        }
        
        Experience::create([
            'user_id'=>Auth::id(),
            'title'=>$request->title,
            'description'=>$request->description,
            'company_name'=>$request->company_name,
            'from_date'=>$request->start_date,
            'to_date'=>$request->end_date,
            'currentlyWork'=>$currentlyWork
        ]);
        
        Session::flash('success','created at');
        return redirect()->back();
    }

    public function show($id)
    {
        # code...
    }

    public function edit($id)
    {
        $experince = Experience::find($id);
        return view('experince.edit',compact('experince'));
    }

    public function update(ExperienceRequest $request,$id)
    {
        if($request->CurrentlyWork == "on"){
            $currentlyWork = '1';
            $endDate= NULL;
        }else{
            $currentlyWork = '0';      
            $endDate  = $request->end_date;   
        }
        
        Experience::find($id)->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'company_name'=>$request->company_name,
            'from_date'=>$request->start_date,
            'to_date'=>$endDate,
            'currentlyWork'=>$currentlyWork
        ]);
        
        Session::flash('success','updated at');
        return redirect()->back();
    }

    public function destroy($id)
    {
        Experience::destroy($id);
        Session::flash('success','deleted at');
        return redirect()->back();
    }
}
