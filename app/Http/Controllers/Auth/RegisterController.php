<?php

namespace savex\Http\Controllers\Auth;

use savex\User;
use DB;
use savex\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\support\Facades\Input;
use Illuminate\Http\Request;

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

    // use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    public function index({})
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
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'profile_pic' => 'required|max:255',
            'email' => 'required', 'exists:users,id,referer,$data["referer"]',
            'user_type' => 'buyer',
            'referer' => 'required|max:255',
            'DOB' => 'required|max:255',
            'telephone' => 'required|max:255',
            'password' => 'required|max:255'
            
        ]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    // protected function create(request $request)
    // {
        
    // }
    public function store (request $request){

        $this->validate($request, [
             'profile_pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $user =new User;
        $imageName = time().'.'.$request->profile_pic->getClientOriginalExtension();
        $request->profile_pic->move(public_path('./uploads/users'), $imageName);

        $user_type="agent";
        $user->first_name         =Input::get("first_name");
        $user->last_name          =Input::get("last_name");
        $user->profile_pic        =$imageName;
        $user->email              =Input::get("email");
        $user->user_type          =$user_type;
        $user->referer_number     =Input::get("referer");
        $user->DOB                =Input::get("DOB");
        $user->telephone          =Input::get("telephone");
        $user->password           =Hash::make(Input::get("password"));
         $user->save();
         return redirect('/login');
    }
}
