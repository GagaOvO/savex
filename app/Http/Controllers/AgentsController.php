<?php

namespace savex\Http\Controllers;

use Illuminate\Http\Request;

use savex\User;

use savex\Agents;

use DB;

use Response;

use Hash;

use Illuminate\support\Facades\Input;

use Illuminate\Support\Facades\Validator;

use Illuminate\Foundation\Auth\RegistersUsers;


class AgentsController extends Controller
{
    
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'DOB' => 'required|max:255',
            'telephone' => 'required|max:255',
            'profile_pic' => 'required|max:255',
            'address' => 'required|max:255',
            'referer' => 'required|max:255',
            'next_of_keen' => 'required|max:255',
            'next_of_keen_tel_number' => 'required|max:255'
            
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {

    }

    public function search_comission(Request $request) {

        if ($request->ajax()) 
        {
            $output = "this Agent Does not Exist !!";
            $agents=DB::table('users')->where('telephone','LIKE','%'.$request->search.'%')
                                        ->get();
            if($agents)
            {
                foreach ($agents as $key => $agent) {

                    $output = $agent->first_name ;
                }

                return Response($output);
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /** For items to be stored in the user table in DB*/
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

        if($user->save())

        $agent =new Agents;
        $agent->user_id = $user->id;
        $agent->id_number = Input::get("id_number");
        $agent->next_of_keen = Input::get("next_of_keen");
        $agent->next_of_keen_tel_number = Input::get("next_of_keen_tel_number");
        $agent->address = Input::get("address");
        $agent->save();
        return redirect('/login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
