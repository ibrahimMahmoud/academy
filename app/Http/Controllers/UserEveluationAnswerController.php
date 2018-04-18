<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EveliationQuestions;
use Auth;
use Session;
use App\UserEveluation;
use App\UserEveluationAnswer;
class UserEveluationAnswerController extends Controller
{
    public function index()
    {
    	$answers = UserEveluationAnswer::with(['questions','user_eveluation'])->get();
    	return view('evaluation_show',compact('answers'));
    }

    public function create()
    {
    	$questions = EveliationQuestions::where('position_id',Auth::user()->position_id)->get();
    	return view('evaluation',compact('questions'));
    }

    public function store(Request $request)
    {
    	// dd(Auth::user()->User_Eveluation);

        UserEveluation::where('is_start','0')->where('user_id',Auth::id())->update([
            'is_start'=>'1'
        ]);
    	foreach ($request->answer as $key => $answer) {
    		UserEveluationAnswer::create([
    			'eveluation_id'=>Auth::user()->User_Eveluation->id,
    			'question_id'=>$request->question_id[$key],
    			'scoure'=>0,
    			'answer'=>$answer,
    		]);
    	}
    	Session::flash('success','we recaived your massege.. please follow your account to know result, thanks :))');
    	return redirect('/answers');
    }
}
