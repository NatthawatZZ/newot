<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\table_personnel;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function credentials(Request $request)
    {
        $field = $this->field($request);
        return [
            $field => $request->get($this->username()),
            'password' => $request->get('password'),
        ];
    }

    public function field(Request $request)
    {
        $email = $this->username();
        return filter_var($request->get($email), FILTER_VALIDATE_EMAIL) ? $email : 'email';
    }

    protected function validateLogin(Request $request)
    {
        // dd($request->all());
        $findpersonner = table_personnel::with('getUser')->where('psn_per_id',$request->email)->first();
        // dd($findpersonner->getUser->email);
        if ($findpersonner != null) {
            // exit("ดิน");
            $request->merge(['email' => $findpersonner->getUser->email]);
        }
        // dd($request->all());
        $field = $this->field($request);
        $messages = ["{$this->username()}.exists" => 'ไม่พบผู้ใช้นี้'];
        $this->validate($request, [
            $this->username() => "required|exists:users,{$field}",
            'password' => 'required',
        ], $messages);
    }


}
