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

    public function seoDesc()
    {
        return view('admin.seo.setmetadesc'); 
    }

    public function seoKey()
    {
        return view('admin.seo.setmetakeywords'); 
    }

    public function AddMetaKeywords(Request $request) 
    {
        $keywords = $request->input('govfees');
        $serviceslug = $request->input('serviceslug');
        $created_at = new \DateTime();
        $updated_at = new \DateTime();
        $data=array('govfees'=>$govfees, 'serviceslug'=>$serviceslug,'created_at'=>$created_at, 'updated_at'=>$updated_at);
        DB::table('govfees')->insert($data);
        return redirect('/admin/gove-fees/add')->with('status', 'Gov Fees Added Successfully');
    
    }
}
