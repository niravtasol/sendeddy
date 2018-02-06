<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'frontController@index');
Route::get('/howitworks', 'frontController@how_it_works');
Route::get('/faq', 'frontController@faq');

Route::get('/homepage', function ()
{
    return View::make('front/home');
});

Route::get('/admin', 'HomeController@index')->name('home');


Auth::routes();
Route::get('/admin', function(){
	return redirect('admin/dashboard');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/dashboard', 'HomeController@dashboard')->name('dashboard');


// Admin Routes
Route::get('/admin/users', 'admin\UsersController@index')->name('users');
Route::get('/admin/adduser', 'admin\UsersController@adduser');
Route::post('/admin/user/create', 'admin\UsersController@create');
Route::get('/admin/edituser/{id}', 'admin\UsersController@edituser');
Route::post('/admin/user/edit', 'admin\UsersController@edit');
Route::get('/admin/deleteuser/{id}', 'admin\UsersController@delete_user');
Route::get('/admin/users/getuser', 'admin\UsersController@getusers')->name('admin/users/getuser');

//Vehicle
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('/admin/vehicle', 'admin\VehicleController@Vehicle')->name('vehicle');
Route::get('/admin/create', 'admin\VehicleController@create')->name('create');
Route::post('/admin/add', 'admin\VehicleController@add')->name('add');
Route::get('/admin/edit/{id}', 'admin\VehicleController@edit')->name('edit');
Route::get('/admin/destroy/{id}', 'admin\VehicleController@destroy')->name('destroy');
Route::post('/admin/update', 'admin\VehicleController@update');
Route::get('/admin/getuservehicle', 'admin\VehicleController@getuservehicle')->name('admin/getuservehicle');

//

//Vehicle category
Route::get('/admin/vehiclecategory', 'admin\VehiclecategoryController@vehiclecategory')->name('vehiclecategory');
Route::get('/admin/createcategory', 'admin\VehiclecategoryController@createcategory');
Route::post('/admin/store', 'admin\VehiclecategoryController@store')->name('store');
Route::get('/admin/editcategory/{id}', 'admin\VehiclecategoryController@editcategory')->name('editcategory');
Route::post('/admin/updatecategory', 'admin\VehiclecategoryController@updatecategory');
Route::get('/admin/destroycategory/{id}', 'admin\VehiclecategoryController@destroycategory')->name('destroycategory');

Route::get('/admin/getuser', 'admin\VehiclecategoryController@getusers')->name('admin/getuser');

/*pakage Manager Start*/

/* Category-pakage  start  */
Route::get('/admin/pakagecategory', 'admin\PakagecategoryController@pakagecategory')->name('pakagecategory');
Route::get('/admin/addpakagecategory', 'admin\PakagecategoryController@addpakagecategory')->name('addpakagecategory');
Route::get('/admin/editpakagecategory/{id}', 'admin\PakagecategoryController@editpakagecategory')->name('editpakagecategory');
Route::post('/admin/storepakagecategory', 'admin\PakagecategoryController@storepakagecategory')->name('storepakagecategory');
Route::post('/admin/updatepakagecategory', 'admin\PakagecategoryController@updatepakagecategory')->name('updatepakagecategory');
Route::get('/admin/destroypakagecategory/{id}', 'admin\PakagecategoryController@destroypakagecategory')->name('destroypakagecategory');
Route::get('/admin/getpakage', 'admin\PakagecategoryController@getpakage')->name('admin/getpakage');

/* Category-pakage  End  */


/*  Type Start   */

Route::get('/admin/pakagetype', 'admin\PakagetypeController@pakagetype')->name('pakagetype');
Route::get('/admin/addpakagetype', 'admin\PakagetypeController@addpakagetype')->name('addpakagetype');
Route::get('/admin/editpakagetype/{id}', 'admin\PakagetypeController@editpakagetype')->name('editpakagecatype');
Route::post('/admin/storepakagetype', 'admin\PakagetypeController@storepakagetype')->name('storepakagetype');
Route::post('/admin/updatepakagetype', 'admin\PakagetypeController@updatepakagetype')->name('updatepakagetype');
Route::get('/admin/destroypakagetype/{id}', 'admin\PakagetypeController@destroypakagetype')->name('destroypakagetype');
Route::get('/admin/getpakagetype', 'admin\PakagetypeController@getpakagetype')->name('admin/getpakagetype');

/*  Type End   */


Route::get('/roles/listAjax',['as'=>'roles.listAjax','uses'=>'RoleController@listAjax']);
Route::group(['middleware' => ['role:admin']], function() {
	Route::get('/admin/roles',['as'=>'roles.index','uses'=>'RoleController@index','middleware' => ['permission:role-create|role-edit|role-delete']]);
	Route::get('/admin/addrole',['as'=>'roles.create','uses'=>'RoleController@create','middleware' => ['permission:role-create']]);
	Route::post('/admin/role/create',['as'=>'roles.store','uses'=>'RoleController@store','middleware' => ['permission:role-create']]);
	Route::get('/admin/deleterole/{id}',['as'=>'roles.delete','uses'=>'RoleController@destroy','middleware' => ['permission:role-delete']]);
	Route::get('/admin/editrole/{id}',['as'=>'roles.delete','uses'=>'RoleController@edit','middleware' => ['permission:role-edit']]);
	Route::post('/admin/role/edit',['as'=>'roles.update','uses'=>'RoleController@update','middleware' => ['permission:role-edit']]);
});