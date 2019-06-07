<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\News;
use Image;
use Storage;
use App\Tags;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // show all news
    // 
    public function index()
    {

        $news = News::latest()->get();


        return view('admin.news.index',compact('news'));
    }


    //add news
    public function create()
    {
        $tags = Tags::all();
        return view('admin.news.create', compact('tags'));
    }


    //show single news

    public function show($id)
    {

        $new = News::find($id);

        return view('admin.news.show',compact('new'));
    }




    //store news
    public function store(Request $request)
    {
        //validate the news details

        $request->validate([
            'title' => 'required|min:8',
            'image' => 'required|image|max:2048',
            'content' => 'required|min:20',
            'status' => 'required',
            'tag'  => 'required'
        ]);

        $news = new News;

        $news->title   =  $request['title'];
        $news->content =  $request['content'];
        $news->tag =  $request['tag'];
        $news->status =  $request['status'];

        //save the image

        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/news/'.$filename);
            Image::make($image)->resize(840, 360)->save($location);

            $news->image = $filename;

        }

        $news->save();
        // set flash data with success message
        Session::flash('success', ' Successfully uploaded !');

        return redirect('/admin/news');
    }

    //edit news or event content
    public function edit($id)
    {

        $new = News::findOrFail($id);
        $tags = Tags::all();
        return view('admin.news.edit',compact(['new','tags']));
    }


    //update the news or event
    public function save(Request $request, $id)
    {
        $news = News::find($id);

        //validate the news details
        $request->validate([
            'title' => 'required|min:8',
            'image' => 'image|max:2048',
            'content' => 'required|min:20',
        ]);

        //save data to the datbase
        $news->title   =  $request['title'];
        $news->content =  $request['content'];
        $news->tag =  $request['tag'];
        $news->status =  $request['status'];

        //save the image
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/news/'.$filename);
            Image::make($image)->resize(840, 360)->save($location);
            //grab the old image
            $oldFilename = $news->image;

            //update the database
            $news->image = $filename;

            //delete the old photo
            Storage::delete('news/'.$oldFilename);

        }

        $news->save();
        // set flash data with success message
        Session::flash('success', 'Successfully updated !');
        return redirect('/admin/news');
    }


    //delete news or events

    public function destroy($id)
    {
        $news = News::find($id);

        //delete the image in the image folder
        Storage::delete('news/'.$news->image);


        //delete the image name in the database
        $news->delete();

        // set flash data with success message
        Session::flash('success', 'Successfully deleted !');
        return redirect('/admin/news');
    }
}
