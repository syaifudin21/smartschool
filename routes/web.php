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
	if (Auth::check()) {
		if (Auth::user()->status=='1') {
            return redirect('/home');
        } elseif (Auth::user()->status=='2') {
            return redirect('/home');
        } elseif (Auth::user()->status=='3') {
            return redirect('/guru');
        } elseif (Auth::user()->status=='4') {
            return redirect('/home');
        } elseif (Auth::user()->status=='5') {
            return redirect('/home');
        } elseif (Auth::user()->status=='6') {
            return redirect('/home');
        } elseif (Auth::user()->status=='7') {
            return redirect('/home');
        } elseif (Auth::user()->status=='8') {
            return redirect('/home');
        } elseif (Auth::user()->status=='9') {
            return redirect('/home');
        } elseif (Auth::user()->status=='10') {
            return redirect('/tu');
        } elseif (Auth::user()->status=='11') {
            return redirect('/admin');
        } else {
		    return view('404');
		}
	}else {
	    return view('welcome');
	};
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/coba', 'CobaController@index');
Route::get('/coba/{id}', 'CobaController@ambildata');
