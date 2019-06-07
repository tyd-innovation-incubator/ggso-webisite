<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Image;
use App\About;
use Storage;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $about = About::first();

        return view('admin.aboutus.show',compact('about'));
    }

    public function edit()
    {
        $about = About::first();

        return view('admin.aboutus.edit',compact('about'));
    }

    public function save(Request $request,$id)
    {

        $about = About::find($id);

        //validate the news details

        $request->validate([
            'image' => 'image|max:2048',
            'overview' => 'required|min:20',
            'mission' => 'required',
            'vision' => 'required',
        ]);

        //save data to the database
        $about = About::find($id);

        $about->overview = $request['overview'];
        $about->mission = $request['mission'];
        $about->vision = $request['vision'];

        //save the image
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/company/'.$filename);
            Image::make($image)->save($location);
            //grab the old image
            $oldFilename = $about->image;

            //update the database
            $about->image = $filename;

            //delete the old photo
            Storage::delete($oldFilename);
        }
        $about->save();

        // set flash data with success message
        Session::flash('success', 'Successfully updated !  ');

        return redirect('/admin/about-us');
    }
}
