<?php

namespace App\Http\Controllers\Associate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

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

    public function submitService(Request $request)
    {
        $requirements = $request->input('requirements');
        $deliverables = $request->input('deliverables');
        $servicename= $request->input('servicename');
        $timeline = $request->input('timeline');
        $price = $request->input('price');
        $byAssociate = $request->input('byAssociate');
        $created_at = new \DateTime();
        $updated_at = new \DateTime();
        $data=array('requirements'=>$requirements,'status'=>'unapproved', 'created_at'=>$created_at, 'updated_at'=>$updated_at, 'deliverables'=>$deliverables, 'timeline'=>$timeline);
        DB::table('hosted_services')->insert($data);
        return redirect('/create-services')->with('status', 'Sub Category Created Successfully');
    }
}
