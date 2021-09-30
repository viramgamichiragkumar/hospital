<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\insertcontroller;
use App\Http\Controllers\aboutcontroller;
use App\Http\Controllers\servicescontroller;
use App\Http\Controllers\doctorscontroller;
use App\Http\Controllers\blogcontroller;
use App\Http\Controllers\alogincontroller;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\gallerycontroller;
use App\Http\Controllers\patientscontroller;
use App\Http\Controllers\appointments;


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

/* 404 FILE NOT - IF ANY URL IS DOES NOT EXIST THAN THIS ROUTE WILL CALL DEFAULT */

Route::fallback(function () {
    $img = '<a href="/"><body style="margin:0px;padding:0px;"><img src="/img/404.gif" width="100%" height="100%" alt=""/></div></a>';
    return $img;
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', 'aboutcontroller@about');
Route::get('/services', 'servicescontroller@services');
Route::get('/doctors', 'doctorscontroller@doctors');
Route::get('/blog', 'blogcontroller@blog');

Route::get('/about', [aboutcontroller::class, 'about']);
Route::get('/services', [servicescontroller::class, 'services']);
Route::get('/doctors', [doctorscontroller::class, 'doctors']);
Route::get('/blog', [blogcontroller::class, 'blog']);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('galleryshow', 'alogincontroller@show');
Route::post('galleryshow', 'alogincontroller@upload');
Route::delete('galleryshow/{id}', 'alogincontroller@destroy');

Route::get('galleryshow', [alogincontroller::class, 'show']);
Route::post('galleryshow', [alogincontroller::class, 'upload']);
Route::delete('galleryshow/{id}', [alogincontroller::class, 'destroy']);

Route::post('/contact', 'contactcontroller@contact');
Route::post('/contact', [contactcontroller::class, 'contact']);

Route::get('/gallery', 'gallerycontroller@gallery');
Route::get('/gallery', [gallerycontroller::class, 'gallery']);


/*example*/
Route::get('/insert', function () {
    return view('insert');
});

Route::post('/insert', 'insertcontroller@insert');
Route::post('/insert', [insertcontroller::class, 'insert']);

/*Route::post('/insert', [insertcontroller::class,'insert']);*/
/*example*/

/*Route::get('/admin','admincontroller@admin');*/


/*Admin login*/
Route::get('/admin', 'alogincontroller@index')->middleware('admin_login');
Route::get('/admin', [alogincontroller::class, 'index'])->middleware('admin_login');

Route::get('/index', function () {
    return redirect("/admin");
});



Route::post('/login', 'alogincontroller@login');
Route::post('/login', [alogincontroller::class, 'login']);

Route::get('/login', function () {
    if (session('logged_admin')) {
        return redirect('/admin');
    } else {
        return view('admin.login');
    }
});

Route::get('/profile', 'alogincontroller@profile');
Route::get('/profile', [alogincontroller::class, 'profile']);

//-------remove if no  need------------------------
Route::get('/general', 'alogincontroller@general');
Route::get('/general', [alogincontroller::class, 'general']);

Route::get('/buttons', 'alogincontroller@buttons');
Route::get('/buttons', [alogincontroller::class, 'buttons']);

//------------------------------------------------

Route::get('/logout', function () {
    if (session()->has('logged_admin')) {
        session()->pull('logged_admin');
    }
    return redirect('/login');
});


// Route::group(, function() {
//     //
// });



Route::get('/patients', 'patientscontroller@patients');
Route::get('/patients', [patientscontroller::class, 'patients']);

Route::get('/addappoinment', 'appointments@add');
Route::get('/addappoinment', [appointments::class, 'add']);

Route::get('/contactshow', 'contactcontroller@BasicTable');
Route::get('/contactshow', [contactcontroller::class, 'BasicTable']);

Route::get('delete/{id}', 'contactcontroller@delete');
Route::get('delete/{id}', [contactcontroller::class, 'delete']);
