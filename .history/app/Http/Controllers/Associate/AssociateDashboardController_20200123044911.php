<?php

namespace App\Http\Controllers\Associate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;

class AssociateDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:associate');
    }
    
    public function index()
    {   
        return view('associate.dashboard.dashboard');
    }

    public function hostService()
    {
        $services = DB::select('select * from services');
        return view('associate.dashboard.liveservices.host_service',['services'=>$services]);
    }
 
    public function postService(Request $request) 
    {
        $requirements = $request->input('requirements');
        $deliverables = $request->input('deliverables');
        $servicename = $request->input('servicename');
        $timeline = $request->input('timeline');
        $price = $request->input('price');
        $byAssociate = $request->input('byAssociate');
        $created_at = new \DateTime();
        $updated_at = new \DateTime();
        $data=array('requirements'=>$requirements,'status'=>'unapproved', 'created_at'=>$created_at, 'updated_at'=>$updated_at, 'deliverables'=>$deliverables, 'timeline'=>$timeline, 'price'=>$price, 'byAssociate'=>$byAssociate, 'servicename'=>$servicename);
        DB::table('hosted_services')->insert($data);
        return redirect('/associate/host/service/')->with('status', 'Service Ad Submitted to the Admin Successfully for the Approvel');
    
    }

    public function invitationList() 
    {
        $invitation = DB::select('select * from associateinvitations where associateEmail = ?',[Auth::user()->email]);
        return view('associate.dashboard.liveservices.invitation-list',['invitation'=>$invitation]);
    }

    public function profile() 
    {
        $associates = DB::select('select * from associates where email = ?',[Auth::user()->email]);
        return view('associate.dashboard.profile',['associates'=>$associates]);
    }

    public function updateprofile(Request $request, $id) 
    {
        $phone = $request->input('name');
        $associate_address = $request->input('name');
        $associate_experience = $request->input('name');
        $associate_about = $request->input('name');
        $associate_postalcode = $request->input('name');
        $updated_at = new \DateTime();
        DB::update('update associates set phone = ?, associate_address = ?, associate_experience =?, associate_about=?, associate_postalcode=? , updated_at=? where id = ?',[$name, $associate_rating, $updated_at,$id]);
        return redirect('/admin/select/associate')->with('status', 'Associated Rated Succesfully');
   }
}
