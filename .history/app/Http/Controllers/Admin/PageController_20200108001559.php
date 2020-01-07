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

    public function pageList() 
    {
        $pageContent = Pages::all();
        return view('admin.pages-list')->with('pageContent',$pageContent);
    }

    public function savePage(Request $request) 
    {

        $PageContent = new Pages;

        $PageContent->title = $request->input('title');
        $PageContent->subtitle = $request->input('subtitle');
        $PageContent->content = $request->input('content');

        $PageContent->save();
        return redirect('/add-page-content')->with('status', 'Data Added');
    }


    public function pageContent() 
    {
        $page = Pages::all();
        return view('site.post')->with('page',$page);
    }

    public function pageedit(Request $request, $id) 
    {
        $page = Pages::findOrFail($id);
        return view('admin.page-edit')->with('page',$page);
    }

    public function pageupdate(Request $request, $id)
    {   
        $page = Pages::find($id);
        $page->title = $request->input('title');
        $page->subtitle = $request->input('subtitle');
        $page->content = $request->input('content');
        $page->update();

        return redirect('/pages-list')->with('status','Page Updated!!');

    }

    public function deletepage(Request $request, $id)
    {   
        $page = Pages::findOrFail($id);
        $page->delete();

        return redirect('/pages-list')->with('status','Page Deleted Sucessfully');

    }


    //Menus

    public function createmenu() 
    {
        $menuContent = Menus::all();
        return view('admin.create-menu')->with('menuContent',$menuContent);
    }

    public function savemenu(Request $request) 
    {

        $menuContent = new Menus;

        $menuContent->title = $request->input('title');

        $menuContent->save();
        return redirect('/create-menu')->with('status', 'Data Added');
    }
}
