<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index() 
    {
        $pageContent = Pages::all();
        return view('admin.add-posts')->with('pageContent',$pageContent);
    }

    public function index() 
    {
        $pageContent = Pages::all();
        return view('admin.pages-list')->with('pageContent',$pageContent);
    }

    public function savePage(Request $request) 
    {

        $PageContent = new Pages;

        $PageContent->title = $request->input('title');
        $PageContent->subtitle = $request->input('subtitle');
        $PageContent->description = $request->input('description');

        $PageContent->save();
        return redirect('/add-page-content')->with('status', 'Data Added');
    }


    public function pageContent() 
    {
        $pageContent = Pages::all();
        return view('site.post')->with('pageContent',$pageContent);
    }
}
