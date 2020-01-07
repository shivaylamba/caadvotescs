<?php

namespace App\Http\Controllers\Admin;

use App\Models\Abouts;
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

        $PageContent = new Abouts;

        $title = $request>input('title');
        $subtitle = $request>input('subtitle');
        $description = $request>input('description');
    }
}
