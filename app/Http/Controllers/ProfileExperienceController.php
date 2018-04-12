<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Http\Requests\ProfileExperienceRequest;
use Validator;
use App\Experience,App\User,App\Project;
use Auth;

class ProfileExperienceController extends Controller
{
    public function index()
    {
        # code...
    }

    public function create()
    {
        return view('complete-prof');
    }

    public function store(ProfileExperienceRequest $request)
    {
        // dd($request->all());
        $inputs = [];

		$nbr = count($request->get('name_project')) ;

		foreach(range(0, $nbr) as $index) {
            $rules['work_status'] = 'required';            
		    $rules['name'] = 'required|string';
		    $rules['phone'] = 'required|numeric';
            $rules['email'] = 'required|email';
            //seconed step
            // $rules['position' . $index] = 'required|string';
            // $rules['company_name' . $index] = 'required|string';
            // $rules['experience' . $index] = 'required|string';
            // $rules['start_date' . $index] = 'required|date';
		    // $rules['end_date.' . $index] = 'required|date';
		    // $rules['CurrentlyWork.' . $index] = 'required';
            // $rules['description.' . $index] = 'required';
            //thired step  
            // $rules['name_project' . $index] = 'required|string';
            // $rules['project_cover' . $index] = 'required|string';
            // $rules['project_details' . $index] = 'required|string';

		}
	
		$validator = Validator::make($data = $request->all(), $rules);

		if($validator->fails()){
			  return redirect()->back()->withErrors($validator)->withInput();
        }

        User::find(Auth::id())->update([
            'first_name'=>$request->get('fname'),
            'last_name'=>$request->get('lname'),
            'phone'=>$request->get('phone'),
            'email'=>$request->get('email'),
            'work_status'=>$request->get('work_status'),

        ]);
        // start positions create
        if($request->has('position')){
            foreach($request->position as $key => $position){
                
                if($request->CurrentlyWork[$key] == "on"){
                    $currentlyWork[$key]  = '1';
                    $endDate= NULL;
                }else{
                    $currentlyWork[$key]  = '0';      
                    $endDate  = $request->end_date;   
                }

                Experience::create([
                    'title'=>$position,
                    'user_id'=>Auth::id(),
                    'company_name'=>$request->company_name[$key],
                    'from_date'=>$request->start_date[$key],
                    'to_date'=>$request->end_date[$key],
                    'description'=>$request->description[$key],
                    'currentlyWork'=>$currentlyWork[$key] 
                ]);
            }
        }
        // start User Projects 
        if($request->has('name_project')){
          foreach ($request->name_project as $key => $project) {
            if (Input::hasFile('project_cover')) {
                $time = time();
                $newname = Hash::make($time);
    
                $ext  =Input::file('project_cover')[$key]->getClientOriginalExtension();
                $fullname = str_replace('/','',$newname) . '.' . $ext;
                Input::file('project_cover')[$key]->move(public_path() .'/uploads/images/project', $fullname);
                $path ='/uploads/images/project';
                $this->attributes['image'] =$path.'/'.$fullname;
            }
            Project::create([
                'user_id'=>Auth::id(),
                'project_name'=>$request->name_project[$key],
                'description'=>$request->project_details[$key],
                'caver_url'=>$this->attributes['image'][$key]
            ]);
          }
        }

    }
}
