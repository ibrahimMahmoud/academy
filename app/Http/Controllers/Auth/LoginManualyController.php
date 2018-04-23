<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use  App\Http\Requests\LoginRequest;
use Session;
use Auth;
class LoginManualyController extends Controller
{
    public function postLogin(LoginRequest $request)
    {
        $email = $request->get('email');
        $password =$request->get('password');

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
          	return redirect('/complete');
         
        }else{
            Session::flash('error','please check your email and password');
            return redirect()->back();
        }
    }

    public function logout()
    {
      Auth::logout();
      return redirect('/login');
    }
}
