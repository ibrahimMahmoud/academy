<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use App\User;
use Session;
use Auth;

class SocialLoginController extends Controller
{
    /**
    * Redirect the user to the facebook authentication page.
    *
    * @return \Illuminate\Http\Response
    */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
    * Obtain the user information from facebook.
    *
    * @return \Illuminate\Http\Response
    */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();
        $refreshToken = $user->refreshToken; // not always provided
        $expiresIn = $user->expiresIn;

        $token = $user->token;
       $find_user = User::where('facebook_id',$user->getId())->first();
    //    dd($find_user);   
       if(count($find_user) > 0 ){
   
        Auth::loginUsingId($find_user->id, true);
        Session::flash('success','authintcation success..');
        return redirect('complete/create');

       }else{
            $create =  User::create([
                'facebook_id'=>$user->getId(),
                'first_name'=>$user->getName(),
                'email'=> $user->getEmail(),
                'image'=> $user->getAvatar(),
                'user_type_id'=>1,
                'is_active'=>1
            ]);
            Auth::loginUsingId($create->id, true);
            Session::flash('success','authintcation success..');
            return redirect('complete/create');
       }

    }
}
