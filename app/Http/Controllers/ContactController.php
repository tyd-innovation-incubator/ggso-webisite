<?php

namespace App\Http\Controllers;

use App\Contacts;
use App\Mail\ContactusMail;
use Mail;
use Session;
use App\Services;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){

        $contact = Contacts::first();

        $services = Services::latest()->take(4)->get();

        return view('ggso.contact',compact(['contact','services']));
    }

    //send email to the infor@tyd.or.tz

    public function sendMail(Request $request)
    {
        $this->validate($request, [ 'name' => 'required', 'email' => 'required|email','subject' => 'required', 'message' => 'required' ]);


        $name = $request['name'];
        $email = $request['email'];
        $subject = $request['subject'];
        $user_message = $request['message'];


        \Mail::to('info@ggso.or.tz')->send(new contactusmail($name,$email,$subject,$user_message));

        // set flash data with success message
        Session::flash('success', 'Your Message was successfuly sent');

        return redirect('/contacts');
    }
}
