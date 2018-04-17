<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ExperienceRequest;
use App\Experience;
use Auth;
use Session;
use Carbon\Carbon;

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
             if ($request->has('end_date')) {
                    $endDate  = $request->end_date; 
                    $end_date =  Carbon::parse($endDate)->format('Y-m-d');

                }        
        }
        
            $start_datee  = $request->start_date;
            $start_date =  Carbon::parse($start_datee)->format('Y-m-d');

        Experience::create([
            'user_id'=>Auth::id(),
            'title'=>$request->title,
            'description'=>$request->description,
            'company_name'=>$request->company_name,
            'from_date'=>@$start_date,
            'to_date'=>@$end_date,
            'currentlyWork'=>$currentlyWork
        ]);
        
        Session::flash('success','created at');
        //return redirect()->back();
        return redirect()->route('prof', [Auth::id()]);
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
              if ($request->has('end_date')) {
                    $endDate  = $request->end_date; 
                    $end_date =  Carbon::parse($endDate)->format('Y-m-d');
                  
                }      

        }
        
            $start_datee  = $request->start_date;
            $start_date =  Carbon::parse($start_datee)->format('Y-m-d');
           

         
        Experience::find($id)->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'company_name'=>$request->company_name,
            'from_date'=>@$start_date,
            'to_date'=>@$end_date,
            'currentlyWork'=>$currentlyWork
        ]);
        
        Session::flash('success','updated at');
        //return redirect()->back();
        return redirect()->route('prof', [Auth::id()]);
    }

    public function destroy($id)
    {
        Experience::destroy($id);
        Session::flash('success','deleted at');
        return redirect()->back();
    }
}
