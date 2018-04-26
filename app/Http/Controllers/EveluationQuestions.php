<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Positions,App\EveliationQuestions,App\PositionEveluation;
use Validator;
use Response;
use Session;
use Auth;
class EveluationQuestions extends Controller
{
    public function positions()
    {
        $positions = Positions::orderBy('created_at','DESC')->with(['questions','PostionEveluation'])->get();

        return view('eveluation_question.position_eveluations.positions',compact('positions'));
    } 

    public function positionActive($id)
    {
       
        $position_eveluation = PositionEveluation::find($id);
        if ($position_eveluation->is_active == '1') {
           $position_eveluation = PositionEveluation::find($id)->update([
            'is_active'=>'0'
           ]);
        $responce = ['status'=>'OK','msg'=>'Active'];
        return Response::json($responce);
        }else{
            $position_eveluation = PositionEveluation::find($id)->update([
            'is_active'=>'1'
           ]);
            $responce = ['status'=>'OK','msg'=>'Deactivated'];
            return Response::json($responce);
        }

    } 

    public function index($id)
    {
    	$questions = EveliationQuestions::where('position_id',$id)->with(['user','position'])->orderBy('created_at','desc')->get();
        $position = Positions::find($id);

    	return view('eveluation_question.questions',compact('questions','position'));
    }

     public function questions()
    {
        $questions = EveliationQuestions::with(['user','position'])->orderBy('created_at','desc')->get();
        // $position = Positions::find($id);

        return view('eveluation_question.questions',compact('questions'));
    }

    public function create($id)
    {
    	$positions = Positions::all();
        $postion_id = $id;
    	return view('eveluation_question.create',compact('positions','postion_id'));
    }

    public function store(Request $request)
    {
         $sum  = 0;
    	if (isset($request->position_id)) {
    		foreach ($request->position_id as $key => $position) {
                if (!isset($request->scoure[$key])) {
                    $scoure = 0;
                }else{
                    $scoure = $request->scoure[$key];
                    if (is_numeric($scoure)) {
                        $scoure=  $scoure;
                    }else{
                        Session::flash('error','scoure bust be float, try again');
                        return redirect()->back();
                    }
                }
                $positions = PositionEveluation::where('position_id',$position)->first();
                $positions_count = PositionEveluation::where('position_id',$position)->get();
                
                //start we are work here
                if (count($positions_count) > 0) {
                      $updateeveluation = PositionEveluation::find($positions->id)->update([
                                            'position_id'=>$position,
                                            'is_active'=>'1',
                                            'updated_by'=>Auth::id(),
                                            'degree'=>$positions->degree + $scoure
                                        ]);
                }else{
                    $sum  += $scoure;
                    $create_eveluation = PositionEveluation::create([
                                            'position_id'=>$position,
                                            'is_active'=>'1',
                                            'updated_by'=>Auth::id(),
                                            'degree'=>$scoure
                                        ]);
                }
                //start we are work here
                EveliationQuestions::create([
    				'question'=>$request->question[$key],
			    	'scoure'=>$scoure,
			    	'created_by'=>Auth::id(),
			    	'position_id'=>$position,
    			]);
    		}
	    	Session::flash('success','question created');
	        return redirect()->back();
    	}else{
    		Session::flash('error','All faild is required and scoure bust be float, try again');
       	 return redirect()->back();
    	}
    }
 

     public function edit($id)
    {
    	$positions = Positions::all();
    	$question = EveliationQuestions::find($id);
    	return view('eveluation_question.edit',compact('positions','question'));
    }

    public function update(Request $request,$id)
    {
        // dd($id);
        if (isset($request->position_id)) {
                if (!isset($request->scoure)) {
                    $scoure = 0;
                }else{
                    $scoure = $request->scoure;
                    if (is_numeric($scoure)) {
                        $scoure=  $scoure;
                    }else{
                       
                   $responce = ['status'=>'NOT OK','error'=>'scoure bust be float, try again'];
                    return Response::json($responce);
                    }
                }

                $questions = EveliationQuestions::find($id)->update([
                    'question'=>$request->question,
                    'scoure'=>$scoure,
                    'created_by'=>$request->user_id,
                ]);

                  $positions = PositionEveluation::where('position_id',$request->position_id)->first();
                $positions_count = PositionEveluation::where('position_id',$request->position_id)->get();
            
                //start we are work here
                if (count($positions_count) > 0) {


                  $updateeveluation = PositionEveluation::where('position_id',$request->position_id)->update([
                                        'is_active'=>'1',
                                        'updated_by'=>$request->user_id,
                                        'degree'=>$positions->degree + $scoure
                                    ]);
                    

                }else{
                  
                    $create_eveluation = PositionEveluation::create([
                                            'position_id'=>$request->position_id,
                                            'is_active'=>'1',
                                            'updated_by'=>$request->user_id,
                                            'degree'=>$scoure
                                        ]);
                }

                // dd(EveliationQuestions::find($id));
            
        $responce = ['status'=>'OK','msg'=>'question updated'];
        return Response::json($responce);
        }else{
        $responce = ['status'=>'NOT OK','error'=>'All faild is required , try again'];
        return Response::json($responce);
        }
    }


    public function destroy($id)
    {
     
           
        EveliationQuestions::destroy($id);
        $responce = ['status'=>'OK','msg'=>'question deleted'];
        return Response::json($responce);
    }
}
