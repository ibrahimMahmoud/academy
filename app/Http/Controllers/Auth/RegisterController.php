<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\UserEveluation;
use Carbon\Carbon;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/complete';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'title' => 'required|string|max:255',
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'required|numeric',
            'work_status' => 'required',
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $create =  User::create([
                'position_id' => $data['title'],
                'first_name' => $data['fname'],
                'last_name' => $data['lname'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'user_type_id'=>'2', //as user 
                'is_active'=>'0',
                'work_status'=>$data['work_status'],
                'password' => Hash::make($data['password']),
            ]);
        $now = Carbon::now();
        $date =  Carbon::parse($now)->format('Y-m-d');
        $create_veluation = UserEveluation::create([
                'scoure'=>'0',
                'is_start'=>'0',
                'start_date'=>$date,
                'user_id'=>$create->id,
                'position_id'=>$data['title'],
            ]);
        return $create;
    }
}
