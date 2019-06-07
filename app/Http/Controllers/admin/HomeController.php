<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Home;
use Image;
use Storage;
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $homecontent = Home::first();

        return view('admin.home.content.index',compact('homecontent'));
    }

    public function edit($id)
    {
        $homecontent = Home::find($id);

        return view('admin.home.content.edit',compact('homecontent'));
    }

    public function save(Request $request, $id)
    {


        //validate the home content details

        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|max:2048'
        ]);

        //save data to the datbase
        $homecontent = Home::find($id);

        $homecontent->title = $request['title'];
        $homecontent->content = $request['content'];

        //save the image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/home/' . $filename);
            Image::make($image)->resize(326, 393)->save($location);
            //grab the old image
            $oldFilename = $homecontent->image;

            //update the database
            $homecontent->image = $filename;

            //delete the old photo
            Storage::delete('home/' . $oldFilename);

        }

        $homecontent->save();
        // set flash data with success message
        Session::flash('success', 'Successfully updated !');
        return redirect('/admin/home/contents');
    }

}
