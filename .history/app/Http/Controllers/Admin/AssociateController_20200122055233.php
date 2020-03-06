<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class AssociateController extends Controller
{
    public function associateRequest() 
    {
        $associates = DB::select('select * from associates WHERE accounttype != "approved"');
        return view('admin.associates.associates-requests',['associates'=>$associates]);
    }

    public function associateList() 
    {
        $associates = DB::select('select * from associates WHERE accounttype = "approved"');
        return view('admin.associates.associates-list',['associates'=>$associates]);
    }

    public function approveAssociate(Request $request, $id) 
    {
        $accounttype = 'approved';
        $updated_at = new \DateTime();
        DB::update('update associates set accounttype = ?,updated_at=? where id = ?',[$accounttype,$updated_at,$id]);
        return redirect('/admin/associates/requests')->with('status', 'Associate Account Approved Succesfully');
    }

    public function deleteAssociate(Request $request, $id) 
    {
        DB::delete('delete from associates where id = ?',[$id]);
        return redirect('/admin/associates/requests')->with('status', 'Associate Account Deleted Succesfully');
    }

    public function inviteAssociate() 
    {
        $service = DB::select('select * from services');
        $associate = DB::select('select * from associates');
        return view('admin.services.invite-associate')->with(compact('service','associate'));
    }

    public function savesubcategory(Request $request) 
    {
        $subcategoryname = $request->input('subcategoryname');
        $parentcategory = $request->input('ParentCategory');
        $status = $request->input('status');
        $created_at = new \DateTime();
        $updated_at = new \DateTime();
        $data=array('subcategoryname'=>$subcategoryname, 'ParentCategory'=>$parentcategory,'status'=>$status, 'created_at'=>$created_at, 'updated_at'=>$updated_at);
        DB::table('subcategories')->insert($data);
        return redirect('/create-subcategory')->with('status', 'Sub Category Created Successfully');
    }
}
