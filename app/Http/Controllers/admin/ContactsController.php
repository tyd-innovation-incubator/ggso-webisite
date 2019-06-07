<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Contacts;
use Image;
use Storage;
class ContactsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show()
    {
        $contact = Contacts::first();

        return view('admin.contacts.show',compact('contact'));

    }

    public function edit()
    {
        $contact = Contacts::first();

        return view('admin.contacts.edit',compact('contact'));
    }

    public function save(Request $request,$id)
    {

        $contacts = Contacts::find($id);

        //validate the news details

        $request->validate([
            'facebook' => 'url',
            'twitter' => 'url',
            'linkedIn' => 'url',
            'location' =>'required',
            'phone' => 'required',
            'email' => 'email|required',
            'hours' => 'required',
            'image' => 'image|max:2048'
        ]);

        //save data to the datbase
        $contacts->facebook  = $request['facebook'];
        $contacts->twitter  = $request['twitter'];
        $contacts->email  = $request['email'];
        $contacts->linkedIn  = $request['linkedIn'];
        $contacts->phone  = $request['phone'];
        $contacts->hours = $request['hours'];
        $contacts->email = $request['email'];
        $contacts->location = $request['location'];

        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/contacts/'.$filename);
            Image::make($image)->resize(370,428)->save($location);
            //grab the old image
            $oldFilename = $contacts->image;

            //update the database
            $contacts->image = $filename;

            //delete the old photo
            Storage::delete('contacts/'.$oldFilename);

        }

        $contacts->save();
        // set flash data with success me


        // set flash data with success message
        Session::flash('success', 'Successfully updated !  ');

        return redirect('/admin/contacts');
}
}
