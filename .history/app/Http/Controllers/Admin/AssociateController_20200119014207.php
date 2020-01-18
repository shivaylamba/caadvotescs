<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AssociateController extends Controller
{
    public function associateRequest() 
    {
        $associates = DB::select('select * from associates WHERE accounttype != "active"');
        return view('admin.services.category-list',['associates'=>$associates]);
    }
}
