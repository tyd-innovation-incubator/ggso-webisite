<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacts;
use App\Team;
use App\Services;

class TeamController extends Controller
{
    public  function index()
    {
        $contact = Contacts::first();

        $team = Team::all();

        $services = Services::latest()->take(4)->get();

        return view('ggso.team',compact(['contact','team','services']));

    }
}
