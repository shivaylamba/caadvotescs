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
        return view('admin.services.create-category');
    }
}
