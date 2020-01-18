<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AssociateController extends Controller
{
    public function associateRequest() 
    {
        $associate = DB::select('select * from ssociates WHERE accounttype != "active"');
        return view('admin.services.category-list',['associates'=>$category]);
    }
}
