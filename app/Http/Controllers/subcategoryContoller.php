<?php

namespace savex\Http\Controllers;

use Illuminate\Http\Request;

use savex\Category;

use savex\Subcategory;

use DB;

use Response;

use Auth;

use Hash;

use Illuminate\support\Facades\Input;

use Illuminate\Database\Eloquent\Collection;

class subcategoryContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userid = Auth::id();
        $category   = Category::select('productcategory.*','name','description')
                ->where('user_id','=',$userid)
                ->get();

        $subcategory   = Subcategory::select('subcategory.*','name','subcategoryname','subdescription')
                ->join('productcategory','productcategory.id','=','subcategory.category_id')
                ->get();

        return view('admin.sub_category')
        ->with('category',$category)
        ->with('subcategory',$subcategory);
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
        $subcategory                    =new Subcategory;
        $subcategory ->user_id          =$userid;
        $subcategory ->category_id      =Input::get("category_id");
        $subcategory ->subcategoryname           =Input::get("subcategoryname");
        $subcategory ->subdescription      =Input::get("subdescription");
        $subcategory ->save();
        $successmessage = 'Sub category has been successfully Recorded Feel free to add more';
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
