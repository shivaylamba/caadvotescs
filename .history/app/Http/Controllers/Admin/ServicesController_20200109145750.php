<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Models\Database_Handler;

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
        $users->usertype = $request->input('usertype');
        $users->update();

        return redirect('/users')->with('status','User Data is Updated');

    }

    public function deleteuser(Request $request, $id)
    {   
        $users = User::findOrFail($id);
        $users->delete();

        return redirect('/users')->with('status','User Deleted Sucessfully');

    }
}
