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
        $title = $request->input('first_name');
        $status = $request->input('last_name');
        $city_name = $request->input('city_name');
        $email = $request->input('email');
        $data=array('first_name'=>$first_name,"last_name"=>$last_name,"city_name"=>$city_name,"email"=>$email);
        DB::table('student')->insert($data);
    }
}
