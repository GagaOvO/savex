<?php

namespace savex\Http\Controllers;


use Illuminate\Http\Request;

use savex\Package_category;

use DB;

use Response;

use Auth;

use Hash;

use Illuminate\support\Facades\Input;

use Illuminate\Database\Eloquent\Collection;

class package_categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userid = Auth::id();
        $package_category   =Package_category::select('package_category.*','package_categoryname','package_categorydesc')
                    ->where('user_id','=',$userid)
              ->get();
        return view('admin.package_category')
        ->with('package_category',$package_category);
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
        $userid = Auth::id();
        $category                             =new Package_category;
        $category ->user_id                   =$userid;
        $category ->package_categoryname      =Input::get("package_categoryname");
        $category ->package_categorydesc      =Input::get("package_categorydesc");
        $category ->save();
        $successmessage = 'Category has been successfully Recorded Feel free to add more';
        $request->session()->flash('success', $successmessage);
        return redirect("/package_category");
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
