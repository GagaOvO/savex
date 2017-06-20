<?php

namespace savex\Http\Controllers\Auth;

use Auth;
use savex\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use savex\User;
use Illuminate\Http\Request;
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
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => ['logout']]);
    }
    use AuthenticatesUsers {
       logout as performLogout;
    }
    public function logout(Request $request)
    {
       $this->performLogout($request);
       return redirect()->route('login');
    }
    public function login(Request $request)
    {
       // dd($request->all());
       if (Auth::attempt([

               'email' => $request ->email,
               'password' => $request->password,

           ])) {
           
           $user = User::where('email',$request->email)->first();

           if ($user->is_admin()) {
               
               return redirect()->route('admin_dashboard');
           }
           elseif ($user->is_agent()) {
               
               return redirect()->route('agent_dashboard');
           }
           elseif ($user->is_user()) {

               return redirect()->route('user_dashboard');
          }
          return redirect()->back();
       }
       
    }
}