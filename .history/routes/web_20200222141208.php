<?php
use App\Mail\TestAmazonSes;
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


Route::get('send-mail','MailControl@sendMail')->name('mail');


Route::get('/', 'Admin\MenuController@menuContent');
Route::get('/services/all', 'Service\ServicePageController@DisplayAllServices');

//Services Page
Route::get('/services/{slug}', 'Service\ServicePageController@ServiceContent');
Route::get('/category/{categoryname}', 'Service\ServicePageController@categoryPage');

Route::get('/service/{servicename}/{byAssociate}', 'Service\ServicePageController@AssociateContent');

//Site View


Route::group(['middleware' => ['auth','admin']], function () {
    
   /* Route::get('/admin', function () {
        return view('admin.dashboard');
    });*/

    Route::get('/admin', 'Admin\DashboardController@index');


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

    //listed Services Add
    Route::get('/admin/services/approvals', 'Admin\ServicesController@servicesApprovals'); 
    Route::get('/admin/services/approve/{id}', 'Admin\ServicesController@servicesApproved');
    Route::get('/admin/services/total-approved', 'Admin\ServicesController@totalApproved');

    //invitation system
    Route::get('/admin/associates/invite', 'Admin\AssociateController@inviteAssociate'); 
    Route::post('/send-invitation', 'Admin\AssociateController@sendinvite'); 


    //Associate Controles
    Route::get('/admin/associates/requests', 'Admin\AssociateController@associateRequest')->name('admin.associates.request');  
    Route::get('/admin/associates/list', 'Admin\AssociateController@associateList')->name('admin.associates.list');  
    Route::get('/admin/associates/approve/{id}', 'Admin\AssociateController@approveAssociate')->name('admin.associates.approve');
    Route::delete('/admin/associates/delete/{id}', 'Admin\AssociateController@deleteAssociate')->name('admin.associates.delete');

    //faq
    Route::get('/admin/faq/create', 'Admin\ServicesController@createfaq'); 
    Route::post('/admin/faq/submit', 'Admin\ServicesController@savefaq'); 
    Route::get('/admin/faq/list', 'Admin\ServicesController@listfaq'); 

    //giverating
    Route::get('/admin/select/associate', 'Admin\AssociateController@giveRating'); 
    Route::get('/admin/rating/{id}', 'Admin\AssociateController@addRating'); 
    Route::post('/admin/rate/{id}', 'Admin\AssociateController@postRating'); 

    //gove fees
    Route::get('/admin/gove-fees/add', 'Admin\AssociateController@GovFees'); 
    Route::post('/admin/gove-fees/post', 'Admin\AssociateController@AddGovFees'); 
    Route::get('/admin/gove-fees/list', 'Admin\AssociateController@GovFeesList'); 
    Route::get('/admin/feedbacks/list', 'Admin\AssociateController@FeedbackList'); 
    Route::get('/admin/feedback/approve/{id}', 'Admin\AssociateController@FeedbackApprove'); 
    Route::delete('/admin/feedback/delete/{id}', 'Admin\AssociateController@deleteFeedback');
    Route::get('/admin/seo/description', 'Admin\DashboardController@seoDesc');
    Route::get('/admin/seo/keywords', 'Admin\DashboardController@seoKey');
    Route::post('/admin/save/metakeywords', 'Admin\DashboardController@AddMetaKeywords'); 
    Route::post('/admin/save/metadesc', 'Admin\DashboardController@addmetaDesc'); 
    Route::get('/admin/leads', 'Admin\DashboardController@leads'); 

    //employees
    Route::get('/admin/employee', 'Admin\DashboardController@addEmployee')->name('admin.register.employee');
    Route::get('/admin/employee-List', 'Admin\DashboardController@EmployeeList');









}); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');


//Associate

 Route::prefix('associate')->group(function() {
    Route::get('/dashboard', 'Associate\AssociateDashboardController@index')->name('associate.dashboard');
    Route::get('/login', 'Associate\LoginController@showLoginForm')->name('associate.login');
    Route::get('/NotVerified', 'Associate\LoginController@verification')->name('associate.verification');
    Route::get('/register', 'Associate\RegisterController@showRegisterForm')->name('associate.register');
    Route::post('/register', 'Associate\RegisterController@register')->name('associate.register.submit');
    Route::post('/login', 'Associate\LoginController@login')->name('associate.login.submit');
    Route::get('/', 'Associate\AssociateController@index')->name('associate.index');
    Route::post('/logout', 'Associate\LoginController@logout')->name('associate.logout');
    Route::get('/host/service', 'Associate\AssociateDashboardController@hostService')->name('associate.host.service');
    Route::post('/service/post', 'Associate\AssociateDashboardController@postService');
    Route::get('/invitations', 'Associate\AssociateDashboardController@invitationList');  
    Route::get('/profile', 'Associate\AssociateDashboardController@profile');  
    Route::post('/update-profile/{id}', 'Associate\AssociateDashboardController@Updateprofile');  
    Route::get('/govfees', 'Associate\AssociateDashboardController@govfeesList');  
    Route::get('/skills', 'Associate\AssociateDashboardController@associateSkills');  
    Route::post('/save-skills', 'Associate\AssociateDashboardController@associateSkillsSubmit');  


 }); 

//Employee 

 Route::prefix('employee')->group(function() {
   Route::get('/dashboard', 'Employee\EmployeeDashboardController@index')->name('employee.dashboard'); 
   Route::post('/register', 'Employee\RegisterController@register')->name('employee.register.submit');
   Route::get('/loginForm', 'Employee\LoginController@LoginForm');
   Route::post('/login', 'Employee\LoginController@login')->name('employee.login.submit');
   Route::post('/logout', 'Employee\LoginController@logout')->name('employee.logout');
   Route::get('/leads', 'Employee\EmployeeDashboardController@leads');


}); 

 //user

 Route::prefix('user')->group(function() {
    Route::get('/login', 'User\LoginController@showLoginForm')->name('user.login');
    Route::get('/register', 'User\RegisterController@showRegisterForm')->name('user.register');
    Route::post('/register', 'User\RegisterController@register')->name('user.register.submit');
    Route::post('/login', 'User\LoginController@login')->name('user.login.submit');
    Route::get('/home', 'User\UserDashboardController@index')->name('user.home');
    Route::get('/dashboard', 'User\UserDashboardController@UserDashboard')->name('user.dashboard');
    Route::get('/profile', 'User\UserDashboardController@profile');  
    Route::post('/update-profile/{id}', 'User\UserDashboardController@Updateprofile');  
    Route::get('/services', 'User\UserDashboardController@servicesList');  
    Route::get('/compare', 'User\UserDashboardController@compareAssociate');  
    Route::post('/compare-associate', 'User\UserDashboardController@compareResult');  
    Route::get('/feedback', 'User\UserDashboardController@feedbackForm');  
    Route::post('/save-feedback', 'User\UserDashboardController@feedbacksubmit');  
    Route::post('/quote', 'Service\ServicePageController@userLeads');  
    
 }); 
