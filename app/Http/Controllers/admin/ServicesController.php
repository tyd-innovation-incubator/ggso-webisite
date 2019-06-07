<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Services;
use Image;
use Storage;

class ServicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // show all news
    public function index()
    {

        $services = Services::latest();

        $services = $services->get();

        return view('admin.services.index', compact('services'));
    }


    //add news
    public function create()
    {
        return view('admin.services.create');
    }


    //show single news

    public function show($id)
    {

        $service = Services::findOrFail($id);

        return view('admin.services.show', compact('service'));
    }


    //store news
    public function store(Request $request)
    {
        //validate the news details

        $request->validate([
            'name' => 'required',
            'image' => 'required|image|max:2048',
            'description' => 'required|min:20|max:400'
        ]);

        $service = new Services;

        $service->name = $request['name'];
        $service->description = $request['description'];

        //save the image

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/services/' . $filename);
            Image::make($image)->resize(370, 231)->save($location);

            $service->image = $filename;

        }

        $service->save();
        // set flash data with success message
        Session::flash('success', ' Successfully uploaded !');

        return redirect('/admin/services');
    }

    //edit news or event content
    public function edit($id)
    {
        $service = Services::find($id);

        return view('admin.services.edit', compact('service'));
    }


    //update the news or event
    public function save(Request $request, $id)
    {
        $service = Services::find($id);

        //validate the news details

        $request->validate([
            'name' => 'required',
            'image' => 'image|max:2048',
            'description' => 'required|min:20|max:400'
        ]);

        //save data to the datbase
        $service = Services::find($id);

        $service->name = $request['name'];
        $service->description = $request['description'];

        //save the image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/services/' . $filename);
            Image::make($image)->resize(370, 231)->save($location);
            //grab the old image
            $oldFilename = $service->image;

            //update the database
            $service->image = $filename;

            //delete the old photo
            Storage::delete('services/' . $oldFilename);

        }

        $service->save();
        // set flash data with success message
        Session::flash('success', 'Successfully updated !');
        return redirect('/admin/services');
    }


    //delete news or events

    public function destroy($id)
    {
        $service = Services::find($id);

        //delete the image in the image folder
        Storage::delete('services/' . $service->image);


        //delete the image name in the database
        $service->delete();

        // set flash data with success message
        Session::flash('success', 'Successfully deleted !');
        return redirect('/admin/services');
    }
}
