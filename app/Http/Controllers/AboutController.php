<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Contacts;
use App\Partners;
use App\Faqs;
use App\Services;

class AboutController extends Controller
{
   public function index()
   {
       $about = About::first();

       $partners = Partners::latest()->get();

       $contact = Contacts::first();

       $faqs = Faqs::latest()->get();

       $services = Services::latest()->take(4)->get();

       return view('ggso.about', compact(['about','partners','contact','faqs','services']));


   }
}
