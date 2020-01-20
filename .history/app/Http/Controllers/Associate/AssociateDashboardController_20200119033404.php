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
        $servicename = $request->input('servicename');
        $subcategory = $request->input('subcategory');
        $content= $request->input('content');
        $status = $request->input('status');
        $created_at = new \DateTime();
        $updated_at = new \DateTime();
        $data=array('servicename'=>$servicename,'status'=>$status, 'created_at'=>$created_at, 'updated_at'=>$updated_at, 'subcategory'=>$subcategory, 'content'=>$content);
        DB::table('hosted_services')->insert($data);
        return redirect('/create-services')->with('status', 'Sub Category Created Successfully');
    }
}
