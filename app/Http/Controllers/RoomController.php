<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('getroomDetails','getlistRoom');
    }
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


    // 
    public function showRooms()
    {
        return view('accounts.roomdetails');
    }

    //
    public function submitRoom(Request $request)
    {

    }



    //


    public function showListroom()
    {
        return view('accounts.listroom');
    }
}
