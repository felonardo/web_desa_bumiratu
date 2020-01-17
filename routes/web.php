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
use App\Post;
use App\keramaian;

// Route::get('/', function () {
//     return view('index');
// });

Route::resource('/', 'HomeController');

Route::resource('/keramaian', 'KeramaianController');

Route::resource('/domisili', 'DomisiliController');

Route::resource('/sktm', 'SKTMController');

Route::resource('/usaha', 'UsahaController');

Route::resource('/sktmSekolah', 'SKTMSekolahController');

Route::get('/login', function () {
    return view('login');
});

// Route::get('/home/cetak', 'DomisiliController@cetak');


Route::get(
    '/keramaianAdmin/cetakkeramaian/{id}',
    ['as' => 'cetakkeramaian', 'uses' => 'KeramaianController@cetakkeramaian']
);
Route::get(
    '/home/cetakdomisili/{id}',
    ['as' => 'cetakdomisili', 'uses' => 'DomisiliController@cetakdomisili']
);
Route::get(
    '/tidakmampuAdmin/cetaksktm/{id}',
    ['as' => 'cetaksktm', 'uses' => 'SKTMController@cetaksktm']
);
Route::get(
    '/usahaAdmin/cetakusaha/{id}',
    ['as' => 'cetakusaha', 'uses' => 'UsahaController@cetakusaha']
);

Route::group(['middleware' => ['auth']], function () {
    Route::resource('/home', 'AdminController');
    Route::resource('/keramaianAdmin', 'AdminKeramaianController');
    Route::resource('/tidakmampuAdmin', 'AdminTidakMampuController');
    Route::resource('/usahaAdmin', 'AdminUsahaController');
});
Auth::routes();

// Route::get('/', 'HomeController@index')->name('home');
