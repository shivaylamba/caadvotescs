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

//Route::get('/post', 'Admin\PageController@pageContent');

Route::get('/', 'Admin\MenuController@menuContent');


//Site View


Route::get('/db', function() {
    if(DB::connection()->getDatabaseName())
    {
       echo "conncted sucessfully to database ".DB::connection()->getDatabaseName();
    }
 });

Route::group(['middleware' => ['auth','admin']], function () {
    
    Route::get('/admin', function () {
        return view('admin.dashboard');
    });

    //Users

    Route::get('/users', 'Admin\DashboardController@registered');
    Route::get('/user-edit/{id}', 'Admin\DashboardController@useredit');
    Route::put('/user-profile-update/{id}', 'Admin\DashboardController@userupdate');
    Route::delete('/delete-user/{id}', 'Admin\DashboardController@deleteuser');
    
    //Services
    Route::get('/create-category', 'Admin\ServicesController@createcategory'); 
    Route::post('/save-category', 'Admin\ServicesController@savecategory'); 
    Route::get('/category-list', 'Admin\ServicesController@categoryList');  
    Route::delete('/delete-category/{id}', 'Admin\ServicesController@deletecategory');
    Route::get('/category-edit/{id}', 'Admin\ServicesController@categoryedit');
    Route::post('/update-category/{id}', 'Admin\ServicesController@updatecategory');

    Route::get('/create-subcategory', 'Admin\ServicesController@createsubcategory'); 
    Route::post('/save-subcategory', 'Admin\ServicesController@savesubcategory'); 
    Route::get('/subcategory-list', 'Admin\ServicesController@subcategoryList');  
    Route::delete('/delete-subcategory/{id}', 'Admin\ServicesController@deletesubcategory');
    Route::get('/subcategory-edit/{id}', 'Admin\ServicesController@categoryedit');









}); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
