<?php

namespace App\Http\Controllers\Employee;

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
        return view('employee.index');
    }
   
    public function leads() 
    {
        $emp_email = Auth::user()->emp_email;
        $emp = DB::select('select * from employees where emp_email = ?',[$emp_email]);
        $leads = DB::select('select * from leads where category = ?',[$emp[0]->emp_category]);
        return view('employee.leads')->with(compact('leads'));
    }

    public function leadsPage(Request $request) 
    {
        $leads = DB::select('select * from leads where id = ?',[$id]);
        return view('employee.leadpage');//->with(compact('leads'));
    }

    
}
