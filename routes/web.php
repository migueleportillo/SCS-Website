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

Route::get('/', 'HomeController@show')->name('home');

Route::get('news', function () {
    return view('news');
})->name('news');

Route::group(['prefix' => 'projects'], function () {
    Route::get('', 'ProjectsController@show')
        ->name('projects_show');
});

Route::get('about', function(){
    return view('about');
})->name('about');

Auth::routes();
