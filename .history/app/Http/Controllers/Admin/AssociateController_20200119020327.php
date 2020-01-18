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
        $subcategoryname = 'approved';
        $updated_at = new \DateTime();
        DB::update('update associates set accounttype = ?,updated_at=? where id = ?',[$subcategoryname,$updated_at,$id]);
        return redirect('/subcategory-list')->with('status', 'SubCategory Updated Succesfully');
    }
}
