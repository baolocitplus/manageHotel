<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');

Route::get('/accounts/admin','UserController@master');
//login
Route::get('/accounts/admin/login','UserController@getLogin')->name('login');
Route::post('login','UserController@postLogin');
// logout
Route::get('logout','UserController@getLogout');




// booking
Route::get('/web/booking', 'BookingController@getChooseday')->name('booking');
Route::get('/web/ChooseRoom', 'BookingController@getChooseRoom')->name('ChooseRoom');
Route::get('/web/Information', 'BookingController@getInformation')->name('Information');
Route::get('/web/Confirmation', 'BookingController@Confirmation')->name('Confirmation');





// Room
Route::get('/web/room-list','RoomController@getlistRoom')->name('roomlist');
Route::get('/web/room-details','RoomController@getroomDetails')->name('roomdetails');


// account room
Route::get('/accounts/submitroom','RoomController@showRooms');
route::get('/accounts/myroom','RoomController@showListroom');

// service

Route::get('/web/about', 'ServiceController@getAbout')->name('about');
Route::get('/web/services', 'ServiceController@getService')->name('service');

//event
Route::get('/web/events', 'EventsController@getEvents')->name('event');

Route::get('/web/eventdetails', 'EventsController@getEventDetails')->name('eventdetails');

// gallery
Route::get('/web/gallery-row', function () {
    return view('pages.gallery-row');
})->name('gallery-row');

Route::get('/web/gallery-grid', function () {
    return view('pages.gallery-grid');
})->name('gallery-grid');

Route::get('/web/gallery-masonry', function () {
    return view('pages.gallery-masonry');
})->name('gallery-masonry');

Route::get('/web/gallery-slide-show', function () {
    return view('pages.gallery-slide-show');
})->name('gallery-slide-show');


//Blogs
Route::get('/web/blogs', 'BlogsController@showblogs')->name('blog');

Route::get('/web/blogsdetails', 'BlogsController@getshowblogsdetails')->name('blogdetails');

Route::get('/accounts/submitsblogs', 'BlogsController@submitblogs');

Route::get('/accounts/myblogs','BlogsController@showmyblogs');


//contact
Route::get('/web/contact', function () {
    return view('pages.contact');
})->name('contact');


// accounts
Route::get('/accounts/receptionist', function ()
{
    return view('admin');
});
