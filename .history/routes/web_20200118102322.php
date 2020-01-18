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

//Services Page
Route::get('/service/{id}', 'Service\ServicePageController@ServiceContent');

Route::get('/test', function () {
    return view('site.test');
});

//Site View


Route::group(['middleware' => ['auth','admin']], function () {
    
    Route::get('/admin', function () {
        return view('admin.dashboard');
    });

    //Users

    Route::get('/users', 'Admin\DashboardController@registered');
    Route::get('/user-edit/{id}', 'Admin\DashboardController@useredit');
    Route::put('/user-profile-update/{id}', 'Admin\DashboardController@userupdate');
    Route::delete('/delete-user/{id}', 'Admin\DashboardController@deleteuser');
    
    //Services Categories
    Route::get('/create-category', 'Admin\ServicesController@createcategory'); 
    Route::post('/save-category', 'Admin\ServicesController@savecategory'); 
    Route::get('/category-list', 'Admin\ServicesController@categoryList');  
    Route::delete('/delete-category/{id}', 'Admin\ServicesController@deletecategory');
    Route::get('/category-edit/{id}', 'Admin\ServicesController@categoryedit');
    Route::post('/update-category/{id}', 'Admin\ServicesController@updatecategory');

    //Services SubCategories
    Route::get('/create-subcategory', 'Admin\ServicesController@createsubcategory'); 
    Route::post('/save-subcategory', 'Admin\ServicesController@savesubcategory'); 
    Route::get('/subcategory-list', 'Admin\ServicesController@subcategoryList');  
    Route::delete('/delete-subcategory/{id}', 'Admin\ServicesController@deletesubcategory');
    Route::get('/subcategory-edit/{id}', 'Admin\ServicesController@subcategoryedit');
    Route::post('/update-subcategory/{id}', 'Admin\ServicesController@updatesubcategory');

    //Services Page
    Route::get('/create-services', 'Admin\ServicesController@createservices'); 
    Route::post('/save-services', 'Admin\ServicesController@saveservices'); 
    Route::get('/services-list', 'Admin\ServicesController@servicesList');  
    Route::delete('/delete-service/{id}', 'Admin\ServicesController@deleteservice');
    Route::get('/service-edit/{id}', 'Admin\ServicesController@serviceedit');
    Route::post('/update-services/{id}', 'Admin\ServicesController@updateservices');
}); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Associate

Route::get('/associate_login', 'Associate\AssociateController@AssociateLogin')->name('login')->middleware('guest');
Route::get('/associate_register', 'Associate\AssociateController@AssociateRegister')->name('register')->middleware('guest');

// Associate Register & Login User
Route::post('/associatelogin', 'Associate\AssociateController@authenticate');
Route::post('/associateregister', 'Associate\AssociateController@register');


Route::prefix('associate')
    ->as('associate.')
    ->group(function() {
        Route::get('home', 'associate\AssociateController@index')->name('home');
Route::namespace('Auth\Login')
      ->group(function() {
       Route::get('login', 'EmployeeController@showLoginForm')->name('login');
    Route::post('login', 'EmployeeController@login')->name('login');
    Route::post('logout', 'EmployeeController@logout')->name('logout');
      });
 });