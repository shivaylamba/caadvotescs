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

        $PageContent->title = $request->input('title');
        $PageContent->subtitle = $request->input('subtitle');
        $PageContent->description = $request->input('description');

        $PageContent->save();
        return redirect('/add-page-content')->with('status', 'Data Added');
    }
}
