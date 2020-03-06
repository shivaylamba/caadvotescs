<?php

namespace App\Http\Controllers\Associate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:associate', ['except' => ['logout']]);
    }

    public function showLoginForm()
    {
      $category = DB::select('select * from servisecategories WHERE status = "active"');
      $subcategory = DB::select('select * from subcategories where status = "active"');
      $services = DB::select('select * from services where status = "active"');
      $popularservices = DB::select('select * from services where status = "active" and popular="yes" LIMIT 3');
      $footerps = DB::select('select * from services where status = "active" and popular="yes" LIMIT 6');
      $footercategory = DB::select('select * from servisecategories WHERE status = "active" LIMIT 6');
      return view('associate.login')->with(compact('category', 'subcategory', 'services', 'popularservices', 'footerps', 'footercategory'));
  }

    public function verification()
    {
      $category = DB::select('select * from servisecategories WHERE status = "active"');
      $subcategory = DB::select('select * from subcategories where status = "active"');
      $services = DB::select('select * from services where status = "active"');
      $popularservices = DB::select('select * from services where status = "active" and popular="yes" LIMIT 3');
      $footerps = DB::select('select * from services where status = "active" and popular="yes" LIMIT 6');
      $footercategory = DB::select('select * from servisecategories WHERE status = "active" LIMIT 6');
      return view('associate.verification')->with(compact('category', 'subcategory', 'services', 'popularservices', 'footerps', 'footercategory'));
    }

    public function login(Request $request)
    {
      // Validate the form data
      $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
      ]);

      // Attempt to log the user in
      if (Auth::guard('associate')->attempt(['email' => $request->email, 'password' => $request->password, 'accounttype' => 'approved'], $request->remember)) {
        // if successful, then redirect to their intended location
        return redirect('/associate');//->intended(route('associate.index'));
      }

      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors(['Email/Password is Incorrect']);
    }

    public function logout()
    {
        Auth::guard('associate')->logout();
        return redirect('/');
    }
}
