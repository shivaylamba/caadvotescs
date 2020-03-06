<?php

namespace App\Http\Controllers\Associate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Associate;
use DB;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegisterForm()
    {
        $category = DB::select('select * from servisecategories WHERE status = "active"');
        $subcategory = DB::select('select * from subcategories where status = "active"');
        $services = DB::select('select * from services where status = "active"');
        $popularservices = DB::select('select * from services where status = "active" and popular="yes" LIMIT 3');
        $footerps = DB::select('select * from services where status = "active" and popular="yes" LIMIT 6');
        $footercategory = DB::select('select * from servisecategories WHERE status = "active" LIMIT 6');
        return view('associate.associateregister')->with(compact('category', 'subcategory', 'services', 'popularservices', 'footerps', 'footercategory'));
    
    }

    public function register()
    {
        $this->validate(request(), [
            'name' => 'required',
            'phone' => 'required',
            'associate_category' => 'required',
            'associate_profession' => 'required',
            'associate_state' => 'required',
            'associate_city' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        $associate = Associate::create(request(['name', 'phone', 'associate_category', 'associate_profession', 'associate_state', 'associate_city',   'email', 'password']));
        
        auth()->login($associate);
        
        return redirect()->to(route('associate.dashboard'));
    }
}

