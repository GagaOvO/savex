<?php

namespace savex\Http\Controllers;

use Illuminate\Http\Request;

use savex\Category;

use DB;

use Response;

use Auth;

use Hash;

use Illuminate\Support\Facades\Input;

use Illuminate\Database\Eloquent\Collection;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userid = Auth::id();
        $category   =Category::select('productcategory.*','name','description')
                    ->where('user_id','=',$userid)
              ->get();
        return view('admin.create_pcategory')
        ->with('category',$category);
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
        $category                    =new Category;
        $category ->user_id          =$userid;
        $category ->name             =Input::get("categoryname");
        $category ->description      =Input::get("description");
        $category ->save();
        $successmessage = 'Category has been successfully Recorded Feel free to add more';
        $request->session()->flash('success', $successmessage);
        return redirect("/product_category");
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
