<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/know-us', function () {
    return Redirect::to('https://linktr.ee/onestopropertyid');
});
Route::get('/beriklan', function () {
    return Redirect::to('https://s.id/yukIklankan');
});
Route::get('/kerjasama-dengan-kami', function () {
    return Redirect::to('https://s.id/kerjasamaDeveloperOneStopProperty');
});
Route::get('/sc/company-profile', function () {
    return Redirect::to('/');
});
Route::get('/linkedin', function () {
    return Redirect::to('https://linkedin.com/company/');
});
Route::get('/instagram', function () {
    return Redirect::to('http://www.instagram.com/onestopproperties');
});
Route::get('/facebook', function () {
    return Redirect::to('http://www.facebook.com/onestoproperty');
});
Route::get('/tiktok', function () {
    return Redirect::to('https://www.tiktok.com/');
});
Route::get('/facebook-community', function () {
    return Redirect::to('https://www.facebook.com/groups/');
});
Route::get('/', function () {
    return view('home.index');
});
Route::get('/tentang', function () {
    return view('home.tentang');
});
Route::get('/hubungi-kami', function () {
    return view('home.contact');
});
