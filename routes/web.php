<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LandingpageFilmController;
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

//Route::get('/', function () {
//    return view('salam');
//});

   
//landingPage

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home1', function () {
    return view('landingpage.index');
});

Route::get('/after_register', function () {
    return view('landingpage.after_register');
});


//admin

Route::get('/administrator', function () {
    return view('admin.home');
});

Route::resource('daftar_film',LandingpageFilmController::class)->middleware('auth');
Route::resource('film',FilmController::class)->middleware('auth');
Route::resource('user',UserController::class)->middleware('auth');

Route::get('film-edit/{id}',[FilmController::class,'edit'])->middleware('auth');
Route::get('user-edit/{id}',[UserController::class,'edit'])->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');