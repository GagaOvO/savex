<?php

namespace savex\Http\Controllers;

use Illuminate\Http\Request;

use savex\Category;

use savex\Subcategory;

use savex\Products;

use savex\product_images;

use DB;

use Response;

use Auth;

use Hash;

use Illuminate\support\Facades\Input;

use Illuminate\Support\Facades\Validator;

use Illuminate\Database\Eloquent\Collection;

use Illuminate\Http\UploadedFile;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userid = Auth::id();
        $products   = Products::select('products.*','name','subcategoryname','product_image','product_name','product_price','product_desc','product_type','product_quantity')
                ->join('productcategory','productcategory.id','=','products.category_id')
                ->join('subcategory','subcategory.id','=','products.subcategory_id')
                ->get();
        return view('admin.products')
        ->with('products',$products);
    }

    public function AddToCart(Request $request , $id)
    {
        $products = Product::find($id);
        $oldcart = Session::has('cart') ?  Session::get('cart') : null ;
        $cart= new Cart($oldcart);   
        $cart ->add($products, $products->id);

        $request->session()->put('cart',$cart);
        return redirect ('admin.products');
    }
    public function getCart(){
        if(!Session::has('cart')){
            return view('shopping-cart' ,['products'=> null]);
        }
        $oldcart= Session::get('cart');
        $cart = new Cart($oldcart);
        return view('shopping-cart' ,['products'=> $cart->items, 'TotalPrice'=>$cart->TotalPrice]);
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
