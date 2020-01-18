<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AssociateController extends Controller
{
    public function categoryList() 
    {
        $category = DB::select('select * from servisecategories');
        return view('admin.services.category-list',['category'=>$category]);
    }
}
