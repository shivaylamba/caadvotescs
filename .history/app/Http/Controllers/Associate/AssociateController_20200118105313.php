<?php

namespace App\Http\Controllers\Associate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


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
