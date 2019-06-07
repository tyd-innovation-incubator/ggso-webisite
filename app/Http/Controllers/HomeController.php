<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slides;
use App\Contacts;
use App\Partners;
use App\Testimony;
use App\Home;
use App\Services;

class HomeController extends Controller
{
    public function index()
    {

        $slides = Slides::all();

        $contact = Contacts::first();

        $testimonies = Testimony::latest()->paginate(4);

        $partners = Partners::latest()->get();

        $home = Home::first();

        $services = Services::latest()->take(4)->get();

        return view('ggso.index',compact(['home','partners','testimonies','contact','slides','services']));
    }

}
