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

class ProductsController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        $userid = Auth::id();
        $category   = Category::select('productcategory.*','name','description')
                ->where('user_id','=',$userid)
                ->get();

        $subcategory   = Subcategory::select('subcategory.*','name','subcategoryname','subdescription')
                ->join('productcategory','productcategory.id','=','subcategory.category_id')
                ->get();

        return view('admin.create_product')
        ->with('category',$category)
        ->with('subcategory',$subcategory);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $requests
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
             'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        // alternatively
        $userid = Auth::id();
        $products                      =new Products;

        $imageName = time().'.'.$request->product_image->getClientOriginalExtension();
        $request->product_image->move(public_path('./uploads/products'), $imageName);

        $products->user_id                 =$userid;
        $products->category_id             =Input::get("category_id");
        $products->subcategory_id          =Input::get("subcategory_id");
        $products->product_image           =$imageName;
        $products->product_name            =Input::get("product_name");
        $products->product_price           =Input::get("product_price");
        $products->product_desc            =Input::get("product_desc");
        $products->product_type            =Input::get("product_type");
        $products->product_quantity        =Input::get("product_quantity");
        $products->product_size            =Input::get("product_size");
        $products->product_color           =Input::get("product_color");

        if($products->save())

        $files = Input::file('images');
        $files_count = count($files );
        $uploadcount = 0;
        foreach ($files as $file) {
            $rules = array('file' => 'required');
            $validator = validator::make(array('file' => $file), $rules);
            if ($validator->passes()) {
                $destinationPath = 'uploads/ecommerce';
                $imagesName = $file->getClientOriginalName();
                $uploads_success = $file->move($destinationPath, $imagesName);
                $uploadcount ++;
                // Save into Database
                $extension = $file->getClientOriginalExtension();
                $entry = new product_images;
                $entry->product_id = $products->id;
                $entry->product_image = $file->getFilename().'.'.$extension;
                $entry->save();

            }

        }
        $successmessage = 'Products has been successfully Recorded Feel free to add more';
        $request->session()->flash('success', $successmessage);
        return redirect("/create_product");
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
        $products_delete     =Products::findOrfail($id)->delete();
        $successmessage = 'Products has been successfully Deleted Feel free to add more';
        $request->session()->flash('success', $successmessage);
                return redirect('/products') ;
    }
}
