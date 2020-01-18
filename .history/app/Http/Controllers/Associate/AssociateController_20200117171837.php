<?php

namespace App\Http\Controllers\Associate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AssociateController extends Controller
{
    public function AssociateRegister()
    {
        return view('auth.associate_register');
    }

    public function AssociateLogin()
    {
        return view('auth.associate_login');
    }

    public function register(Request $request)
    {
        $validator = $request->validate([
          'name'      => 'required|min:1',
          'associate_category'      => 'required',
          'associate_profession'      => 'required',
          'associate_state'      => 'required',
          'associate_city'      => 'required',
          'email'     => 'required',
          'password'  => 'required|min:6'
        ]);

        \App\User::create($validator);

        return redirect('/login');
     }


     public function authenticate(Request $request)
     {
         $validator = $request->validate([
             'email'     => 'required',
             'password'  => 'required|min:6'
         ]);
 
         if (Auth::attempt($validator)) {
             return redirect()->route('dashboard');
         }
     }
 
     public function logout()
     {
         Session::flush()
         Auth::logout();
         return back();
     }
}
