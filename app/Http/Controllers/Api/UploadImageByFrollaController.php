<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;
use Illuminate\Support\Facades\Input;

class UploadImageByFrollaController extends Controller
{
    public function upload(Request $request)
    {
    	// dd($request->all());
  
	  	$time = time();
        $newname = Hash::make($time);
        // dd(Input::file('file'));
        $ext  =Input::file('file')->getClientOriginalExtension();
        $skip_slash = str_replace('/','',$newname) . '.' . $ext;
        $fullname = str_replace('.','',$skip_slash) . '.' . $ext;
        $move = Input::file('file')->move(public_path() .'/uploads/images/frolla', $fullname);
       
        $path ='http://localhost/academy/public/uploads/images/frolla';
   		
   		$response = new \StdClass;
        $response->link = $this->attributes['image'] =$path.'/'.$fullname;
        // dd($response);
    	echo stripslashes(json_encode($response));
    }
}
