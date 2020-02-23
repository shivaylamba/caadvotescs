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
        $this->middleware('guest:employee', ['except' => ['logout']]);
    }

    public function login(Request $request)
    {
      // Validate the form data
      $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
      ]);

      // Attempt to log the user in
      if (Auth::guard('employee')->attempt(['email' => $request->email, 'password' => $request->password, 'accounttype' => 'approved'], $request->remember)) {
        // if successful, then redirect to their intended location
        return redirect('/employee');//->intended(route('associate.index'));
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
