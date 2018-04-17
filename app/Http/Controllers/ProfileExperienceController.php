<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Http\Requests\ProfileExperienceRequest;
use Validator;
use App\Experience,App\User,App\Project;
use Auth;
use Illuminate\Support\Facades\Input;
use Hash;
use Session;
use Carbon\Carbon;

class ProfileExperienceController extends Controller
{
    public function index()
    {
         if (Auth()->user()->work_status == 'freelancer') {
            return redirect('/complete_freelancer');
          }else{
            return redirect('/complete_employee');
          }
    }


    public function show()
    {
        # code...
    }

    //as frelancer
    public function create()
    {
        // dd(Auth::user()->work_status =='freelancer');
        if (Auth::user()->work_status =='freelancer') {
          $user = User::find(Auth::id());
          return view('complete-prof-freelancer',compact('user'));
        }else{
             return abort(404);

        }
    }

     //as employee
     public function EmployeeCreate()
     {

        if (Auth::user()->work_status =='employee') {
              $user = User::find(Auth::id());
              return view('complete-prof',compact('user'));
        }else{
             return abort(404);

        }
   
     }

    public function store(ProfileExperienceRequest $request)
    {
        // dd($request->all());
        $inputs = [];

		$nbr = count($request->get('name_project')) ;

		foreach(range(0, $nbr) as $index) {
            // $rules['work_status'] = 'required';            
		    $rules['fname'] = 'required|string';
		    $rules['lname'] = 'required|string';
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
            // 'work_status'=>$request->get('work_status'),

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
                $start_datee  = $request->start_date[$key];
                $start_date =  Carbon::parse($start_datee)->format('Y-m-d');
                
             
                if ($request->has('end_date')) {
                    $endDate  = $request->end_date[$key]; 
                    $end_date =  Carbon::parse($endDate)->format('Y-m-d');
                }
                Experience::create([
                    'title'=>$position,
                    'user_id'=>Auth::id(),
                    'company_name'=>$request->company_name[$key],
                    'from_date'=>@$start_date,
                    'to_date'=>@$end_date,
                    'description'=>$request->description[$key],
                    'currentlyWork'=>$currentlyWork[$key] 
                ]);
            }
        }
        // start User Projects 
        if($request->has('project_cover')){
          foreach ($request->file('project_cover') as $key => $project) {
            $time = time();
            $newname = Hash::make($time);
            $ext  =Input::file('project_cover')[$key]->getClientOriginalExtension();
            $skip_slash = str_replace('/','',$newname) . '.' . $ext;
            $fullname = str_replace('.','',$skip_slash) . '.' . $ext;
            $move = $project->move(public_path() .'/uploads/images/project', $fullname);
           
            $path ='/uploads/images/project';
            $this->attributes['image'] =$path.'/'.$fullname;

            Project::create([
                'user_id'=>Auth::id(),
                'project_name'=>$request->name_project[$key],
                'description'=>$request->project_details[$key],
                'caver_url'=>$this->attributes['image']
            ]);

          }
        }
        
        Session::flash('success','created success..');
        return redirect('prof/'.Auth::id());
    }
}
