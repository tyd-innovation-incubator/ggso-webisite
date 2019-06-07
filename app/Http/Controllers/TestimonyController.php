<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacts;
use App\Testimony;
use App\Services;

class TestimonyController extends Controller
{
    public function index()
    {
        $contact = Contacts::first();

        $testimonies =  Testimony::latest()->paginate(6);

        $services = Services::latest()->take(4)->get();


        return view('ggso.testimonial',compact(['contact','testimonies','services']));

    }
}
