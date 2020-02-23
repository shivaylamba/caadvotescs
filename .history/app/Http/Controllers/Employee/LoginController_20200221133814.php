<?php

namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest', ['except' => ['logout']]);
    }



    public function LoginForm()
    {   
        $category = DB::select('select * from servisecategories WHERE status = "active"');
        $subcategory = DB::select('select * from subcategories where status = "active"');
        $services = DB::select('select * from services where status = "active"');
        $popularservices = DB::select('select * from services where status = "active" and popular="yes" LIMIT 3');
        $footerps = DB::select('select * from services where status = "active" and popular="yes" LIMIT 6');
        $footercategory = DB::select('select * from servisecategories WHERE status = "active" LIMIT 6');
        return view('employee.login')->with(compact('category', 'subcategory', 'services', 'popularservices', 'footerps', 'footercategory'));
    }


    
    public function login(Request $request)
    {
      // Validate the form data
      $this->validate($request, [
        'emp_email'   => 'required|email',
        'password' => 'required|min:6'
      ]);

      // Attempt to log the user in
      if (Auth::guard('employee')->attempt(['emp_email' => $request->emp_email, 'password' => $request->password], $request->remember)) {
        // if successful, then redirect to their intended location
        return redirect('/employee/dashboard');//->intended(route('associate.index'));
      }

      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors(['Email/Password is Incorrect, Please Check Your Login Details and Try Again']);
    }

    public function logout()
    {
        Auth::guard('employee')->logout();
        return redirect('/');
    }
}
