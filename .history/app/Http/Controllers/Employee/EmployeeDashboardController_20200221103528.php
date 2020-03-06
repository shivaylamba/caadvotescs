<?php

namespace App\Http\Controllers\Associate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;

class EmployeeDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:employee');
    }
    
    public function index()
    {   
        return view('associate.dashboard.dashboard');
    }

    
}
