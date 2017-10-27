<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    //
    public function getlistRoom()
    {
        return view('pages.rooms-list');
    }


    //
    public function getroomDetails()
    {
        return view('pages.room-details');
    }


}
