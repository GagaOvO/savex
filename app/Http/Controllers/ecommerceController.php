<?php

namespace savex\Http\Controllers;

use Illuminate\Http\Request;

use savex\Category;

use savex\Subcategory;

use savex\Products;

use DB;

use Response;

use Auth;

use Hash;

use Illuminate\support\Facades\Input;

use Illuminate\Database\Eloquent\Collection;

class ecommerceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userid = Auth::id();
        $quickproduct  = Products::select('products.*','name','subcategoryname','product_image','product_name','product_price','product_desc','product_type','product_quantity')
                ->where('product_type','=','Hot Deal')
                ->join('productcategory','productcategory.id','=','products.category_id')
                ->join('subcategory','subcategory.id','=','products.subcategory_id')
                ->get();

        $otherproduct  = Products::select('products.*','name','subcategoryname','product_image','product_name','product_price','product_desc','product_type','product_quantity')
                ->where('product_type','=','Outsider Product')
                ->join('productcategory','productcategory.id','=','products.category_id')
                ->join('subcategory','subcategory.id','=','products.subcategory_id')
                ->get();

        return view('ecommerce')
        ->with('quickproduct',$quickproduct)
        ->with('otherproduct',$otherproduct);
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function product_single(Request $request ,$id)
    {
       $singleproduct  = Products::select('products.*','name','subcategoryname','product_image','product_name','product_price','product_desc','product_type','product_quantity')
                ->where([['product_type','=','Hot Deal'],['products.id','=',$id]])
                ->join('productcategory','productcategory.id','=','products.category_id')
                ->join('subcategory','subcategory.id','=','products.subcategory_id')
                ->get();
                return view('ecommerce_product-single')
            ->with('singleproduct',$singleproduct);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
