<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    //
    public  function getEvents()
    {
        return view('pages.events');
    }

    //
    public function getEventDetails()
    {
        return view('pages.event-details');
    }
}
