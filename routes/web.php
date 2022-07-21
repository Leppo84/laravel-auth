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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('guests.home');
})->name('home');

Auth::routes();

// ?

Route::get('/admin', 'HomeController@index')->name('admin');
Route::resource('posts', 'Admin\PostController');


// Route::get('/admin', 'AdminController@index')->name('home');
