<?php

namespace App\Http\Controllers\Admin;
use App\Models\Menus;
use App\Models\SubMenus;
use App\Models\Database_Handler;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function createservicecategory() 
    {
        $serviceCategory = ServiceCategory::all();
        return view('admin.services.servicecategory')->with('serviceCategory',$serviceCategory);
    }
    
}
