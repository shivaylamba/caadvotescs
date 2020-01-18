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

    public function approveAssociate() 
    {
        $accounttype = 'approved';
        $updated_at = new \DateTime();
        DB::update('update associates set accounttype = ?,updated_at=? where id = ?',[$accounttype,$updated_at,$id]);
        return redirect('/admin/associates/requests')->with('status', 'Associate Account Approved Succesfully');
    }
}
