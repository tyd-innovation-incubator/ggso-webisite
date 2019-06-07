<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Partners;
use Image;
use Storage;

class PartnersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // show all news
    public function index()
    {

        $partners = Partners::latest();

        $partners = $partners->get();

        return view('admin.partners.index', compact('partners'));
    }


    //add news
    public function create()
    {
        return view('admin.partners.create');
    }


    //show single news

    public function show($id)
    {

        $partner = Partners::findOrFail($id);

        return view('admin.partners.show', compact('partner'));
    }


    //store news
    public function store(Request $request)
    {
        //validate the news details

        $request->validate([
            'name' => 'required',
            'image' => 'required|image|max:2048',
            'description' => 'required|min:20|max:400',
            'link' => 'required|url',
        ]);

        $partner = new Partners;

        $partner->name = $request['name'];
        $partner->link = $request['link'];
        $partner->description = $request['description'];

        //save the image

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/partners/' . $filename);
            Image::make($image)->resize(200, 112)->save($location);

            $partner->image = $filename;

        }

        $partner->save();
        // set flash data with success message
        Session::flash('success', ' Successfully uploaded !');

        return redirect('/admin/partners');
    }

    //edit news or event content
    public function edit($id)
    {
        $partner = Partners::find($id);

        return view('admin.partners.edit', compact('partner'));
    }


    //update the news or event
    public function save(Request $request, $id)
    {
        $partner = Partners::find($id);

        //validate the news details

        $request->validate([
            'name' => 'required',
            'image' => 'image|max:2048',
            'description' => 'required|min:20|max:400',
            'link' => 'required|url',
        ]);

        //save data to the datbase
        $partner = Partners::find($id);

        $partner->name = $request['name'];
        $partner->link = $request['link'];
        $partner->description = $request['description'];

        //save the image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/partners/' . $filename);
            Image::make($image)->resize(200, 112)->save($location);
            //grab the old image
            $oldFilename = $partner->image;

            //update the database
            $partner->image = $filename;

            //delete the old photo
            Storage::delete('partners/' . $oldFilename);

        }

        $partner->save();
        // set flash data with success message
        Session::flash('success', 'Successfully updated !');
        return redirect('/admin/partners');
    }


    //delete news or events

    public function destroy($id)
    {
        $partner = Partners::find($id);

        //delete the image in the image folder
        Storage::delete('partners/' . $partner->image);


        //delete the image name in the database
        $partner->delete();

        // set flash data with success message
        Session::flash('success', 'Successfully deleted !');
        return redirect('/admin/partners');
    }
}
