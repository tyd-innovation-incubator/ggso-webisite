<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Tags;

class TagsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // show all news
    public function index()
    {

        $tags = Tags::latest()->get();


        return view('admin.tags.index',compact('tags'));
    }


    //add news
    public function create()
    {
        return view('admin.tags.create');
    }


    //store news
    public function store(Request $request)
    {
        //validate the tag name

        $request->validate([
            'name' => 'required',
        ]);

        $tag = new Tags;

        $tag->name   =  $request['name'];

        $tag->save();
        // set flash data with success message
        Session::flash('success', ' Successfully Added !');

        return redirect('/admin/tags');
    }

    //edit tag
    public function edit($id)
    {

        $tag = Tags::find($id);

        return view('admin.tags.edit',compact('tag'));
    }


    //update tag
    public function save(Request $request, $id)
    {
        $tag = Tags::find($id);

        //validate the news details

        $request->validate([
            'name' => 'required',
        ]);

        //save data to the datbase
        $tag->name = $request['name'];


        $tag->save();
        // set flash data with success message
        Session::flash('success', 'Successfully updated !');
        return redirect('/admin/tags');
    }


    //delete tags

    public function destroy($id)
    {
        $tag = Tags::find($id);
        $tag->delete();

        // set flash data with success message
        Session::flash('success', 'Successfully deleted !');

        return redirect('/admin/tags');
    }

}
