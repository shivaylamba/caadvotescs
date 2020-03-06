<?php

namespace App\Http\Controllers\Admin;
use App\User;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $users = DB::select('select * from users');
        $associates = DB::select('select * from associates');
        $services = DB::select('select * from services');
        $u = count($users);
        $a = count($associates);
        $s = count($services);
        return view('admin.dashboard')->with(compact('leads'));
    }


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
        $keywords = $request->input('keywords');
        $created_at = new \DateTime();
        $updated_at = new \DateTime();
        $data=array('keywords'=>$keywords,'created_at'=>$created_at, 'updated_at'=>$updated_at);
        DB::table('metakeywords')->insert($data);
        return redirect('/admin/seo/keywords')->with('status', 'Meta Keywords Added Successfully');
    
    }

    public function addmetaDesc(Request $request) 
    {
        $metadesc = $request->input('metadesc');
        $created_at = new \DateTime();
        $updated_at = new \DateTime();
        $data=array('description'=>$metadesc,'created_at'=>$created_at, 'updated_at'=>$updated_at);
        DB::table('metadescription')->insert($data);
        return redirect('/admin/save/metadesc')->with('status', 'Meta Descripton Added Successfully');
    
    }

    public function leads() 
    {
        $leads = DB::select('select * from leads');
        return view('admin.leads')->with(compact('leads'));
    }
}
