<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function getAbout()
    {
        return view('pages.about');
    }

    //
    public function getService()
    {
        return view('pages.services');
    }
}
