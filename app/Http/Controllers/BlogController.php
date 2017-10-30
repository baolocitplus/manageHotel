<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    // show blogs
    public function getshowblogs()
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
}
