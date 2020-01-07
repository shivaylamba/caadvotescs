<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index() 
    {
        return view('admin.add-posts');
    }

    public function savePage(Request $request) 
    {
        $title = $request>input('title');
    }
}
