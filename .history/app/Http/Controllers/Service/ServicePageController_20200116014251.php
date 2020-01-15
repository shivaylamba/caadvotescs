<?php

namespace App\Http\Controllers\Service;
use DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServicePageController extends Controller
{
    public function ServiceContent(Request $request, $id) 
    {
        $services = DB::select('select * from services where status = "active" and id = ?',[$id]);
        return view('site.service')->with(compact('services'));
    }
    
}
