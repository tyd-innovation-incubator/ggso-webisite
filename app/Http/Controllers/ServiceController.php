<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;
use App\Contacts;
use App\Partners;

class ServiceController extends Controller
{
     public function index()
     {
         $contact = Contacts::first();

         $services = Services::all();

         $partners = Partners::latest()->get();

         return view('ggso.service', compact(['contact','services','partners']));

     }
}
