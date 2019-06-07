<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Image;
use Storage;
use App\Testimony;

class TestimonyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // show all news
    public function index()
    {

        $testimonies= Testimony::latest()->get();


        return view('admin.testimony.index',compact('testimonies'));
    }


    //add news
    public function create()
    {
        return view('admin.testimony.create');
    }


    //show single news

    public function show($id)
    {

        $testimony = Testimony::find($id);

        return view('admin.testimony.show',compact('testimony'));
    }




    //store news
    public function store(Request $request)
    {
        //validate the news details

        $request->validate([
            'name' => 'required',
            'image' => 'required|image|max:2048',
            'message' => 'required|min:20',
            'occupation' => 'required'
        ]);

        $testimony = new Testimony;

        $testimony->name   =  $request['name'];
        $testimony->message =  $request['message'];
        $testimony->occupation =  $request['occupation'];

        //save the image

        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/testimonies/'.$filename);
            Image::make($image)->resize(122,122)->save($location);

            $testimony->image = $filename;

        }

        $testimony->save();
        // set flash data with success message
        Session::flash('success', ' Successfully uploaded !');

        return redirect('/admin/testimonies');
    }

    //edit news or event content
    public function edit($id)
    {

        $testimony = Testimony::find($id);

        return view('admin.testimony.edit',compact('testimony'));
    }


    //update the news or event
    public function save(Request $request, $id)
    {
        $testimony = Testimony::find($id);

        //validate the news details

        $request->validate([
            'name' => 'required',
            'image' => 'image|max:2048',
            'message' => 'required|min:20',
            'occupation' => 'required'
        ]);

        //save data to the datbase
        $testimony->name = $request['name'];
        $testimony->message = $request['message'];
        $testimony->occupation = $request['occupation'];

        //save the image
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/testimonies/'.$filename);
            Image::make($image)->resize(122,122)->save($location);
            //grab the old image
            $oldFilename = $testimony->image;

            //update the database
            $testimony->image = $filename;

            //delete the old photo
            Storage::delete('testimonies/'.$oldFilename);

        }

        $testimony->save();
        // set flash data with success message
        Session::flash('success', 'Successfully updated !');
        return redirect('/admin/testimonies');
    }


    //delete news or events

    public function destroy($id)
    {
        $testimony = Testimony::find($id);

        //delete the image in the image folder
        Storage::delete('testimonies/'.$testimony->image);


        //delete the image name in the database
        $testimony->delete();

        // set flash data with success message
        Session::flash('success', 'Successfully deleted !');
        return redirect('/admin/testimonies');
    }

}
