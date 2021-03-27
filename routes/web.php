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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('projects', ProjectController::class)->middleware('auth');
// Route::get('session/get','SessionController@accessSessionData');
// Route::get('session/set','SessionController@storeSessionData');
// Route::get('session/remove','SessionController@deleteSessionData');
// Route::get('/session',function()  
// {  
//   return view('form');  
// });  
// Route::post('/session','FormController@store');  