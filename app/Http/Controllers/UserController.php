<?php

namespace savex\Http\Controllers;
use savex\User;

use Illuminate\Http\Request;
use DB;

use Response;

use Hash;

use Illuminate\support\Facades\Input;

class UserController extends Controller
{
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
    public function create()
    {
        //
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

        $user_type="buyer";
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
