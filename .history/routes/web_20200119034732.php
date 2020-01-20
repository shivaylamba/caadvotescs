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

    //Associate Controles
    Route::get('/admin/associates/requests', 'Admin\AssociateController@associateRequest')->name('admin.associates.request');  
    Route::get('/admin/associates/list', 'Admin\AssociateController@associateList')->name('admin.associates.list');  
    Route::get('/admin/associates/approve/{id}', 'Admin\AssociateController@approveAssociate')->name('admin.associates.approve');
    Route::delete('/admin/associates/delete/{id}', 'Admin\AssociateController@deleteAssociate')->name('admin.associates.delete');


}); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');


//Associate

 Route::prefix('associate')->group(function() {
    Route::get('/login', 'Associate\LoginController@showLoginForm')->name('associate.login');
    Route::get('/NotVerified', 'Associate\LoginController@verification')->name('associate.verification');
    Route::get('/register', 'Associate\RegisterController@showRegisterForm')->name('associate.register');
    Route::post('/register', 'Associate\RegisterController@register')->name('associate.register.submit');
    Route::post('/login', 'Associate\LoginController@login')->name('associate.login.submit');
    Route::get('/', 'Associate\AssociateController@index')->name('associate.index');
    Route::get('/logout', 'Associate\LoginController@logout')->name('associate.logout');
    Route::get('/dashboard', 'Associate\AssociateDashboardController@index')->name('associate.dashboard');
    Route::get('/host/service', 'Associate\AssociateDashboardController@hostService')->name('associate.host.service');
    Route::get('/service/host', 'Associate\AssociateDashboardController@submitService')->name('associate.submit.service');

 });