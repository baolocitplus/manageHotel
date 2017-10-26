<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function getChooseday()
    {
        return view('pages.booking');
    }

    public function getChooseRoom()
    {
        return view('pages.booking-1');
    }

    public function getInformation()
    {
        return view('pages.booking-2');
    }

    public function Confirmation()
    {
        return view('pages.booking-3');
    }
}
