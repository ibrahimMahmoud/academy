<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Positions,App\EveliationQuestions;
use Session;
use Auth;
class EveluationQuestions extends Controller
{
    public function index()
    {
    	$questions = EveliationQuestions::with(['user','position'])->orderBy('created_at','desc')->get();
    	// dd($questions);
    	return view('eveluation_question.index',compact('questions'));
    }

    public function create()
    {
    	$positions = Positions::all();
    	return view('eveluation_question.create',compact('positions'));
    }

    public function store(Request $request)
    {
    	if ($request->has('position_id')) {
    		foreach ($request->position_id as $key => $position) {
    			EveliationQuestions::create([
    				'question'=>$request->question[$key],
			    	'scoure'=>$request->scoure[$key],
			    	'created_by'=>Auth::id(),
			    	'position_id'=>$position,
    			]);
    		}
	    	Session::flash('success','question created');
	        return redirect()->back();
    	}else{
    		Session::flash('success','All faild is required , try again');
       	 return redirect()->back();
    	}
    }

     public function edit($id)
    {
    	$positions = Positions::all();
    	$question = EveliationQuestions::find($id);
    	// dd($question);
    	return view('eveluation_question.edit',compact('positions','question'));
    }

    public function destroy($id)
    {
    	EveliationQuestions::destroy($id);
    	Session::flash('success','question deleted');
	    return redirect()->back();
    }
}
