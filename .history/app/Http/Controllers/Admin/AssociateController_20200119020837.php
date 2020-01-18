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
        return view('admin.associates.associate-requests',['associates'=>$associates]);
    }

    public function associateList() 
    {
        $associates = DB::select('select * from associates WHERE accounttype = "approved"');
        return view('admin.associates.associate-requests',['associates'=>$associates]);
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
}
