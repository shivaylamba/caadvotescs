<?php

namespace App\Http\Controllers\Admin;

use DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    public function createcategory() 
    {
        return view('admin.services.create-category');
    }

    public function savecategory() 
    {
        $categoryname = $request->input('category-name');
        $status = $request->input('status');
        $data=array('category-name'=>$categoryname,"status"=>$status);
        DB::table('servisecategories')->insert($data);
    }
}
