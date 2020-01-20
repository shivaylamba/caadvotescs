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
}
