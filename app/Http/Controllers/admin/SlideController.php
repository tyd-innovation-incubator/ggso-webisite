<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Slides;
use Image;
use Storage;
class SlideController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // show all news
    public function index()
    {

        $slides = Slides::latest();

        $slides = $slides->get();

        return view('admin.home.slides.index', compact('slides'));
    }


    //add news
    public function create()
    {
        return view('admin.home.slides.create');
    }


    //show single news

    public function show($id)
    {

        $slide = Slides::findOrFail($id);

        return view('admin.home.slides.show', compact('slide'));
    }


    //store news
    public function store(Request $request)
    {
        //validate the news details

        $request->validate([
            'slogan_1' => 'required',
            'slogan_2' => 'required',
            'image' => 'required|image|max:2048',
        ]);

        $slide = new Slides;

        $slide->slogan_1 = $request['slogan_1'];
        $slide->slogan_2 = $request['slogan_2'];

        //save the image

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/slides/' . $filename);
            Image::make($image)->resize(1920, 761)->save($location);

            $slide->image = $filename;

        }

        $slide->save();
        // set flash data with success message
        Session::flash('success', ' Successfully uploaded !');

        return redirect('/admin/slides');
    }

    //edit news or event content
    public function edit($id)
    {
        $slide = Slides::find($id);

        return view('admin.home.slides.edit', compact('slide'));
    }


    //update the news or event
    public function save(Request $request, $id)
    {
        $slide = Slides::find($id);

        //validate the news details

        $request->validate([
            'slogan_1' => 'required',
            'slogan_2' => 'required',
            'image' => 'image|max:2048',
        ]);

        //save data to the datbase
        $slide = Slides::find($id);

        $slide->slogan_1 = $request['slogan_1'];
        $slide->slogan_2 = $request['slogan_2'];

        //save the image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/slides/' . $filename);
            Image::make($image)->resize(1920, 930)->save($location);
            //grab the old image
            $oldFilename = $slide->image;

            //update the database
            $slide->image = $filename;

            //delete the old photo
            Storage::delete('slides/' . $oldFilename);

        }

        $slide->save();
        // set flash data with success message
        Session::flash('success', 'Successfully updated !');
        return redirect('/admin/slides');
    }


    //delete news or events

    public function destroy($id)
    {
        $slide = Slides::find($id);

        //delete the image in the image folder
        Storage::delete('slides/' . $slide->image);


        //delete the image name in the database
        $slide->delete();

        // set flash data with success message
        Session::flash('success', 'Successfully deleted !');
        return redirect('/admin/slides');
    }
}
