<?php

namespace App\Http\Controllers\Associate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AssociateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:associate');
    }
    public function index()
    {
        return view('associate.index');
    }
}
