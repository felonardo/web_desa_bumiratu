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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });

Route::resource('/','HomeController');

Route::resource('keramaian','KeramaianController');

Route::get('/login', function () {
    return view('login');
});
Route::get('/suratizinkegiatan', function () {
    return view('form_sik');
});
Route::get('/suratketeranganpbb', function () {
    return view('form_pbb');
});
Route::get('/suratizindomisili', function () {
    return view('form_domisili');
});
Route::get('/suratketerangantidakmampu', function () {
    return view('form_skkm');
});
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', function () {
        return view('admin');
    });
});
Auth::routes();

// Route::get('/', 'HomeController@index')->name('home');
