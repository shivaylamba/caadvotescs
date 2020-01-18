<?php

namespace App\Http\Controllers\Associate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AssociateDashboardController extends Controller
{
    public function index()
    {   
        return view('associate.dashboard.dashboard');
    }
}
