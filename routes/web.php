<?php
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|-------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes('');

Route::group(['middleware'=> 'auth'], function()
{
	Route::get('/user_dashboard', function(){
		return view('users/user_dashboard');
	})->name('user_dashboard');

	Route::get('/admin_dashboard', function(){
		return view('/admin.admin_dashboard');
	})->name('admin_dashboard');
	
	Route::get('/agent_dashboard',function(){
		return view('/agents.agent_dashboard');
	})->name('agent_dashboard');
});

// Route::get('home',['middleware' => 'auth', 'uses' => 'HomeController@index']);

Route::get ('/search','AgentsController@search_comission');

Route::get('create_users','UserController@index');
Route::post('register_user','UserController@store');

Route::post('create_agent','AgentsController@store');
Route::get('tourism_dashboard',['middleware' => 'auth', 'uses' => 'tourdashboardController@index']);
Route::get('create_product',['middleware' => 'auth', 'uses' => 'ProductsController@create']);
Route::post('create_product',['middleware' => 'auth', 'uses' => 'ProductsController@store']);

Route::get('tour_package',['middleware' => 'auth', 'uses' => 'tourpackageController@index']);
Route::get('tour_package',['middleware' => 'auth', 'uses' => 'tourpackageController@index']);
Route::get('create_package',['middleware' => 'auth', 'uses' => 'tourpackageController@create']);
Route::post('create_package',['middleware' => 'auth', 'uses' => 'tourpackageController@store']);

Route::get('package_category',['middleware' => 'auth', 'uses' => 'package_categoryController@index']);
Route::post('package_category',['middleware' => 'auth', 'uses' => 'package_categoryController@store']);


Route::get('product_category',['middleware' => 'auth', 'uses' => 'CategoriesController@index']);
Route::post('product_category',['middleware' => 'auth', 'uses' => 'CategoriesController@store']);

Route::get('products',['middleware' => 'auth', 'uses' => 'ProductsController@index']);
Route::post('products',['middleware' => 'auth', 'uses' => 'ProductsController@store']);
Route::post('product_delete',['middleware' => 'auth', 'uses' => 'ProductsController@destroy']);

Route::get('sub_category',['middleware' => 'auth', 'uses' => 'subcategoryContoller@index']);
Route::post('sub_category',['middleware' => 'auth', 'uses' => 'subcategoryContoller@store']);

// ---------------------------------------------------------------------------------------
// 									AGENTS ROUTING PANEL
// ---------------------------------------------------------------------------------------
Route::get('agent_dashboard',['middleware' => 'auth', 'uses' => 'agentpanelController@index'])->name('agent_dashboard');
Route::get('savexproducts',['middleware' => 'auth', 'uses' => 'savexproductsController@index'])->name('savexproducts');
Route::get('ecommerce',['middleware' => 'auth', 'uses' => 'ecommerceController@index'])->name('ecommerce');

Route::get('ecommerce_product-single/{id}',['middleware' => 'auth', 'uses' => 'ecommerceController@product_single'])->name('ecommerce_product-single');

Route::get('tour_package',['middleware' => 'auth', 'uses' => 'tourismpackagesController@index'])->name('tour_package');
Route::get('tour_package_listview',['middleware' => 'auth', 'uses' => 'tourismpackagesController@listview'])->name('tour_package_listview');

Route::get('tour_package_single',['middleware' => 'auth', 'uses' => 'tourismpackagesController@tourpackage_details'])->name('tourpackage_single');

Route::get('topup',['middleware' => 'auth', 'uses' => 'topupController@index'])->name('topup');


// ---------------------------------------------------------------------------------------
// 									CART ROUTES
// ---------------------------------------------------------------------------------------





Route::get('/AddToCart/{id}',[
		'uses' => 'CartController@AddToCart',
		'as' =>'AddToCart'
	]);
Route::get('/shopping-cart',[
		'uses' => 'CartController@getCart',
		'as' =>'shopping-cart'
	]);