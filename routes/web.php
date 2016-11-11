<?php


use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home.home');
})->name('home');

Route::get('news', function () {
    return view('home.news');
})->name('news');

Route::get('projects', function(){
    return view('home.projects');
})->name('projects');

Route::get('about', function(){
    return view('home.about');
})->name('about');

Auth::routes();
