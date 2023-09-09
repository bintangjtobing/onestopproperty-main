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
Route::get('/sc/panduan-foto', function () {
    return Redirect::to('/osp/business/panduan-foto-osp2023.pdf');
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
    return Redirect::to('http://www.instagram.com/onestoproperties');
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

// Dashboard
Route::prefix('/v')->group(function () {
    Route::get('/login', 'dashboardController@login')->name('login');
    Route::post('/login', 'dashboardController@loginProcess');
    Route::get('/logout', 'dashboardController@logout')->name('logout');
});
Route::group(['middleware' => 'auth'], function () {
    Route::prefix('/app/dashboard')->group(function () {
        Route::get('/', 'dashboardController@index');
        Route::prefix('/complaint')->group(function () {
            Route::get('/', 'reportController@Report');
            Route::post('/', 'reportController@newReport');
            Route::post('add/kk', 'reportController@newKK');
            Route::get('print', 'reportController@printReport');
            Route::get('search', 'reportController@searchReport')->name('search');
            Route::get('view/{id}', 'reportController@getReport')->name('viewOrder');
            Route::get('edit/{id}', 'reportController@editReport');
            Route::post('edit/{id}', 'reportController@editProcessReport');
            Route::get('delete/{id}', 'reportController@deleteReport');
            Route::get('cancel/{id}', 'reportController@cancelReport');
        });
        Route::prefix('/blog')->group(function () {
            Route::get('/', 'blogController@Blog')->name('indexBlog');
            Route::get('/add', 'blogController@BlogNew');
            Route::post('/', 'blogController@newBlog');
            Route::get('search', 'blogController@searchBlog')->name('searchBlog');
            Route::get('view/{id}', 'blogController@getBlog')->name('viewBlog');
            Route::get('edit/{id}', 'blogController@editBlog');
            Route::post('edit/{id}', 'blogController@editProcessBlog');
            Route::get('delete/{id}', 'blogController@deleteBlog');
            Route::get('cancel/{id}', 'blogController@cancelBlog');
        });
        Route::prefix('/category')->group(function () {
            Route::get('/', 'categoryController@Category');
            Route::post('/', 'categoryController@newCategory');
            Route::get('search', 'categoryController@searchCategory')->name('searchCategory');
            Route::get('view/{id}', 'categoryController@getCategory')->name('viewCategory');
            Route::get('edit/{id}', 'categoryController@editCategory');
            Route::post('edit/{id}', 'categoryController@editProcessCategory');
            Route::get('delete/{id}', 'categoryController@deleteCategory');
        });
        Route::prefix('/relawan')->group(function () {
            Route::get('/', 'relawanController@Relawan');
            Route::post('/', 'relawanController@newRelawan');
            Route::get('search', 'relawanController@searchRelawan')->name('searchRelawan');
            Route::get('view/{id}', 'relawanController@getRelawan')->name('viewRelawan');
            Route::get('edit/{id}', 'relawanController@editRelawan');
            Route::post('edit/{id}', 'relawanController@editProcessRelawan');
            Route::get('delete/{id}', 'relawanController@deleteRelawan');
        });

        Route::prefix('/account')->group(function () {
            Route::get('/', 'accountController@account');
            Route::post('/', 'accountController@newAccount');
            Route::get('search', 'accountController@searchAccount')->name('searchAccount');
            Route::get('view/{id}', 'accountController@getAccount')->name('viewRelawan');
            Route::get('edit/{id}', 'accountController@editAccount');
            Route::post('edit/{id}', 'accountController@editProcessAccount');
            Route::get('delete/{id}', 'accountController@deleteAccount');
        });

        Route::get('log', 'dashboardController@log');
    });
});
