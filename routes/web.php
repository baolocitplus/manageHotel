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

Route::get('/', function () {
    return view('pages.home');
})->name('home');

// booking
Route::get('/web/booking', 'BookingController@getChooseday')->name('booking');
Route::get('/web/ChooseRoom', 'BookingController@getChooseRoom')->name('ChooseRoom');
Route::get('/web/Information', 'BookingController@getInformation')->name('Information');
Route::get('/web/Confirmation', 'BookingController@Confirmation')->name('Confirmation');





// Room 
Route::get('/web/room-list','RoomController@getlistRoom')->name('roomlist');
Route::get('/web/room-details','RoomController@getroomDetails')->name('roomdetails');

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
Route::get('/web/blogs', function () {
    return view('pages.blog');
})->name('blog');

Route::get('/web/blogsdetails', function () {
    return view('pages.blog-details');
})->name('blogdetails');

//contact
Route::get('/web/contact', function () {
    return view('pages.contact');
})->name('contact');

