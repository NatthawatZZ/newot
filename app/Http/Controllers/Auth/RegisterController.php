<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\TableMember;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    // protected $redirectTo = '/home';


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
          'psn_id' => ['required', 'string', 'max:255',],
          'mb_title' => ['required', 'string', 'max:255'],
          'mb_fname' => ['required', 'string', 'max:255'],
          'mb_lname' => ['required', 'string', 'max:255'],
          'mb_age' => ['required', 'string', 'max:255'],
          'mb_idcard' => ['required', 'string', 'max:13'],
          'mb_birth' => ['required', 'string', 'max:255'],
          'pst_id' => ['required', 'string', 'max:255'],
          'mb_mobile' => ['required', 'string', 'max:255'],
          'email' => ['required', 'string', 'max:255'],
          //'password' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
           'password' => ['required', 'string', 'min:4', 'confirmed'],
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
        return User::create([
            'psn_id' => $data['psn_id'],
            'mb_title' => $data['mb_title'],
            'mb_fname' => $data['mb_fname'],
            'mb_lname' => $data['mb_lname'],
            'mb_idcard' => $data['mb_idcard'],
            'mb_age' => $data['mb_age'],
            'mb_birth' => $data['mb_birth'],
            'pst_id' => $data['pst_id'],
            'mb_mobile' => $data['mb_mobile'],
            'email' => $data['email'],
            'password' => $data['password'],
            'password' => Hash::make($data['password']),
        ]);
        return redirect(route('login'));
            // return User::create([
            //     'psn_id' => $data['psn_id'],
            //     'mb_title' => $data['mb_title'],
            //     'mb_fname' => $data['mb_fname'],
            //     'mb_lname' => $data['mb_lname'],
            //     'mb_idcard' => $data['mb_idcard'],
            //     'mb_age' => $data['mb_age'],
            //     'mb_birth' => $data['mb_birth'],
            //     'pst_id' => $data['pst_id'],
            //     'mb_mobile' => $data['mb_mobile'],
            //     'email' => $data['email'],
            //     'password' => $data['password'],
            //     'password' => Hash::make($data['password']),
            // ]);

    }
}
