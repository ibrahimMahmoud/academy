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
    	dd($request->all());
    	 if ($request->has('file')) {
        	$time = time();
			$fullname = $time . '.png';
			$image = "data:image/jpg;base64,".$request->get('file');
			$img = substr($request->get('file'), strpos($request->get('file'), ",")+1);
			$binary  = base64_decode($img);

			$put_file = file_put_contents(public_path().'/uploads/images/profile/'. $fullname, base64_decode(explode(',',$image)[1]));
			$this->attributes['image'] ='uploads/images/profile/'.$fullname;
			
        }

	  	$time = time();
        $newname = Hash::make($time);
        dd(Input::file('file'));
        $ext  =Input::file('file')->getClientOriginalExtension();
        $skip_slash = str_replace('/','',$newname) . '.' . $ext;
        $fullname = str_replace('.','',$skip_slash) . '.' . $ext;
        $move = Input::file('file')->move(public_path() .'/uploads/images/frolla', $fullname);
       
        $path ='/uploads/images/frolla';
        $this->attributes['image'] =$path.'/'.$fullname;
    	return 'ok';
    }
}
