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
        $popularservices = DB::select('select * from services where status = "active" and popular="yes" LIMIT 3');
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
        $associate_address = $request->input('associate_address');
        $associate_experience = $request->input('associate_experience');
        $associate_about = $request->input('associate_about');
        $associate_postalcode = $request->input('associate_postalcode');
        $updated_at = new \DateTime();
        DB::update('update associates set phone = ?, associate_address = ?, associate_experience =?, associate_about=?, associate_postalcode=? , updated_at=? where id = ?',[$phone, $associate_address, $associate_experience, $associate_about, $associate_postalcode, $updated_at,$id]);
        return redirect('/associate/profile')->with('status', 'Your Profile Updated Successfully');
   }
    

}
