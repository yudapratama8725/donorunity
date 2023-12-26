<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('/daftar', \App\Http\Controllers\DaftarController::class);

Route::resource('/dashboard-daftar', \App\Http\Controllers\DaftarController::class);
Route::resource('/dashboard-pesan', \App\Http\Controllers\PesanController::class);


Route::resource('/contact', \App\Http\Controllers\PesanController::class);






Route::get('/', function () {
    return view('index');
});

Route::get('home', function()
{
return View::make('index');
});

Route::get('about', function()
{
return View::make('about');
});

Route::get('jadwal', function()
{
return View::make('jadwal');
});
Route::get('daftar', function()
{
return View::make('daftar');
});
Route::get('contact', function()
{
return View::make('contact');
});

Route::get('login', function()
{
return View::make('login');
});

Route::get('admin', function()
{
return View::make('login-admin');
});

Route::get('signin', function()
{
return View::make('signin');
});

