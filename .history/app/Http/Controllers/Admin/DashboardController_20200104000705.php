<?php

namespace App\Http\Controllers\Admin;
use App\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function registered()
    {   
        $users = User::all();
        return view('admin.users')->with('users',$users);
    }

    public function useredit(Request $request, $id)
    {   
        $users = User::findOrFail($id);
        return view('admin.user-edit')->with('users',$users);

    }

    public function userupdate(Request $request, $id)
    {   
        $users = User::find($id);
        return view('admin.user-edit')->with('users',$users);

    }
}
