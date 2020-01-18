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
        DB::update('update subcategories set subcategoryname = ?,status=?,updated_at=? where id = ?',[$subcategoryname,$status,$updated_at,$id]);
        return redirect('/subcategory-list')->with('status', 'SubCategory Updated Succesfully');
    }
}
