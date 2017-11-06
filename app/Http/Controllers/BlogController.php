<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    // show blogs
    public function showblogs()
    {
        return view('pages.blog');
    }

    // 
    public function getshowblogsdetails()
    {
        return view('pages.blog-details');
    }
    

    // 
    public function submitblogs()
    {
        return view('accounts.submitsblogs');
    }

    // 
    public function showmyblogs()
    {
        return view('accounts.myblogs');
    }
}
