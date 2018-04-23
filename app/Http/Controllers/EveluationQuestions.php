<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Positions,App\EveliationQuestions,App\PositionEveluation;
use Validator;
use Session;
use Auth;
class EveluationQuestions extends Controller
{
    public function index()
    {
    	$questions = EveliationQuestions::with(['user','position'])->orderBy('created_at','desc')->get();
    	return view('eveluation_question.index',compact('questions'));
    }

    public function create()
    {
    	$positions = Positions::all();
    	return view('eveluation_question.create',compact('positions'));
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
                // dd($positions);

                //start we are work here
                if ($positions > 0) {
                   
                      $create_eveluation = PositionEveluation::find($positions->id)->update([
                                            'position_id'=>$position,
                                            'is_active'=>'1',
                                            'updated_at'=>Auth::id(),
                                            'scoure'=>$positions->scoure + $scoure
                                        ]);
                }else{
                    $sum  += $scoure;
                    $create_eveluation = PositionEveluation::create([
                                            'position_id'=>$create_eveluation->id,
                                            'is_active'=>'1',
                                            'updated_at'=>Auth::id(),
                                            'scoure'=>$scoure
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
    public function show($id)
    {
        // return view('eveluation_question.positions');

    }

     public function edit($id)
    {
    	$positions = Positions::all();
    	$question = EveliationQuestions::find($id);
    	// dd($question);
    	return view('eveluation_question.edit',compact('positions','question'));
    }

    public function update(Request $request,$id)
    {
        if (isset($request->position_id)) {
                if (!isset($request->scoure)) {
                    $scoure = 0;
                }else{
                    $scoure = $request->scoure;
                    if (is_numeric($scoure)) {
                        $scoure=  $scoure;
                    }else{
                        Session::flash('error','scoure bust be float, try again');
                        return redirect()->back();
                    }
                }
// dd($request->all());
                EveliationQuestions::find($id)->update([
                    'question'=>$request->question,
                    'scoure'=>$scoure,
                    'created_by'=>Auth::id(),
                    'position_id'=>$request->position_id,
                ]);
            Session::flash('success','question updated');
            return redirect()->back();
        }else{
            Session::flash('error','All faild is required , try again');
         return redirect()->back();
        }
    }


    public function destroy($id)
    {
    	EveliationQuestions::destroy($id);
    	Session::flash('success','question deleted');
	    return redirect()->back();
    }
}
