<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;


class UserDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }
    
    public function index()
    {   
        $category = DB::select('select * from servisecategories WHERE status = "active"');
        $subcategory = DB::select('select * from subcategories where status = "active"');
        $services = DB::select('select * from services where status = "active"');
        $popularservices = DB::select('select * from services where status = "active" and popular="yes" LIMIT 8');
        $footerps = DB::select('select * from services where status = "active" and popular="yes" LIMIT 6');
        $footercategory = DB::select('select * from servisecategories WHERE status = "active" LIMIT 6');
        return view('user.index')->with(compact('category', 'subcategory', 'services', 'popularservices', 'footerps', 'footercategory'));
    }


    public function UserDashboard()
    {
        return view('user.dashboard.dashboard');
    }

    public function profile() 
    {
        $user = DB::select('select * from users where email = ?',[Auth::user()->email]);
        return view('user.dashboard.profile',['user'=>$user]);
    }

    public function updateprofile(Request $request, $id) 
    {
        $phone = $request->input('phone');
        $user_address = $request->input('user_address');
        $user_state = $request->input('user_state');
        $user_city = $request->input('user_city');
        $user_about = $request->input('user_about');
        $user_postalcode = $request->input('user_postalcode');
        $updated_at = new \DateTime();
        DB::update('update users set phone = ?, user_address = ?, user_state =?, user_city=?, user_about=? ,user_postalcode=?, updated_at=? where id = ?',[$phone, $user_address, $user_state, $user_city, $user_about, $user_postalcode, $updated_at,$id]);
        return redirect('/user/profile')->with('status', 'Your Profile Updated Successfully');
   }

   public function servicesList() 
    {
        $services = DB::select('select * from services');
        $category = DB::select('select * from subcategories');
        return view('user.dashboard.services-list')->with(compact('category', 'services'));
    }
    
    public function compareAssociate()
    {
        $associates = DB::select('select * from associates WHERE accounttype = "approved"');
        return view('user.dashboard.compare-associate')->with(compact('associates'));
    }

    public function compareResult(Request $request)
    {
        $as1  = $request->input('associate_1');
        $as2  = $request->input('associate_2');
        $associate1 = DB::select('select * from associates WHERE email = ?',[$as1]);
        $associate2 = DB::select('select * from associates WHERE email = ?',[$as2]);
        $as_service1 = DB::select('select * from hosted_services WHERE email = ?',[$as1]);
        $as_service2 = DB::select('select * from hosted_services WHERE email = ?',[$as2]);
        return view('user.dashboard.associate-result')->with(compact('associate1', 'associate2'));
    }

}
