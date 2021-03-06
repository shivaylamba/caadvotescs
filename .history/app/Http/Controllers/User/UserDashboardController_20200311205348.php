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
        $as_service1 = DB::select('select * from hosted_services WHERE byAssociate = ?',[$as1]);
        $as_service2 = DB::select('select * from hosted_services WHERE byAssociate = ?',[$as2]);
        $s1 = count($as_service1);
        $s2 = count($as_service2);
        return view('user.dashboard.associate-result')->with(compact('associate1', 'associate2', 'as_service1', 'as_service2', 's1', 's2'));
    }

    public function feedbackForm()
    {
        return view('user.dashboard.feedbackform');
    }

    public function feedbacksubmit(Request $request) 
    {

        $feedback = $request->input('feedback');
        $user = $request->input('byuser');
        $created_at = new \DateTime();
        $updated_at = new \DateTime();
        $data=array('feedback'=>$feedback, 'byUser'=>$user, 'status'=>'not approved','created_at'=>$created_at, 'updated_at'=>$updated_at);
        DB::table('feedbacks')->insert($data);
        return redirect('/user/feedback')->with('status', 'Thank your for submiting your feedback');
    }

    public function WorksList() 
    {
        $email = Auth::user()->email;
        $leads = DB::select('select * from leads where email = ?',[$email]);
        return view('user.dashboard.worksprog')->with(compact('leads'));
    }

    public function upload() 
    {
        return view('user.dashboard.upload');
    }

    public function saveupload(Request $request) 
    {
       
        $this->validate($request, [
            'input_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        if ($request->hasFile('input_img')) {
            $image = $request->file('input_img');
            $name = time().'-service-img'.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/DigitalLibrary');
            $image->move($destinationPath, $name);
        }
        $email = Auth::user()->email;
        $service_name = $request->input('service_name');
        $CUST_ID = $request->input('CUST_ID');
        $document_name = $request->input('document_name');
        $created_at = new \DateTime();
        $updated_at = new \DateTime();
        $data=array('user_email'=>$email,  'images'=>$name,'created_at'=>$created_at, 'updated_at'=>$updated_at, 'service_name'=>$service_name, 'CUST_ID'=>$CUST_ID, 'document_name'=>$document_name);
        DB::table('digitalibrary')->insert($data);
        return redirect('/user/works/{id}')->with('status', 'Data Added to Digital Library Successfully');
    }

    public function library() 
    {
        $email = Auth::user()->email;
        $library = DB::select('select * from digitalibrary where user_email = ?',[$email]);
        return view('user.dashboard.library')->with(compact('library'));
    }

    public function work(Request $request , $id) 
    {
        $leads = DB::select('select * from leads where id = ?',[$id]);
        return view('user.dashboard.progress')->with(compact('leads'));
    }
    
}
