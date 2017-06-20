<?php

namespace savex\Http\Controllers;

use Illuminate\Http\Request;

use savex\Package_category;

use savex\Tour_package;

use savex\package_images;

use savex\Package_agendadays;

use DB;

use Response;

use Auth;

use Hash;

use Illuminate\support\Facades\Input;

use Illuminate\Support\Facades\Validator;

use Illuminate\Database\Eloquent\Collection;

use Illuminate\Http\UploadedFile;

class tourpackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.tourism_package');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userid = Auth::id();
        $package_category  = Package_category::select('package_category.*','package_categoryname','package_categorydesc')
                ->where('user_id','=',$userid)
                ->get();
        return view('admin.create_package')
        ->with('package_category',$package_category);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
             'package_profile' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        // alternatively
       
        $userid = Auth::id();
        $package                      =new Tour_package;

        $imageName = time().'.'.$request->package_profile->getClientOriginalExtension();
        $request->package_profile->move(public_path('./uploads/package_profile'), $imageName);

        $package->user_id                 =$userid;
        $package->package_category_id     =Input::get("package_category_id");
        $package->package_image           =$imageName;
        $package->package_name            =Input::get("package_name");
        $package->package_price           =Input::get("package_price");
        $package->package_desc            =Input::get("package_desc");
        $package->duration                =Input::get("duration");
        $package->Location                =Input::get("tour_location");
        $package->ages                    =Input::get("ages");
        $package->start_point             =Input::get("start_point");
        $package->end_point               =Input::get("end_point");
        $package->save();       

        $packagedays                      =new Package_agendadays;
        $packagedays->package_id          =$package->id;
        $packagedays->day_name            =implode(',',array(Input::get('day_name')));

        if($packagedays->save())

        $files = Input::file('package_gallery');
        $files_count = count($files );
        $uploadcount = 0;
        foreach ($files as $file) {
            $rules = array('file' => 'required');
            $validator = validator::make(array('file' => $file), $rules);
            if ($validator->passes()) {
                $destinationPath = 'uploads/tour_packages';
                $imagesName = $file->getClientOriginalName();
                $uploads_success = $file->move($destinationPath, $imagesName);
                $uploadcount ++;
                // Save into Database
                $extension = $file->getClientOriginalExtension();
                $entry = new package_images;
                $entry->package_id    = $package->id;
                $entry->package_image = $file->getFilename().'.'.$extension;
                $entry->save();
            }
        }
        $successmessage = 'Packages has been successfully Created Feel free to add more';
        $request->session()->flash('success', $successmessage);
            return redirect("/create_package");
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
