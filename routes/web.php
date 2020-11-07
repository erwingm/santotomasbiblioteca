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


Route::post('/', 'ContactController@sendMessage')->name('contact.send');

// Rutas del Administrador
Route::group(['prefix' => 'admin', 'namespace'=> 'Admin', 'middleware' => 'auth'], function(){
    //Route::get('ca','PostController@index');
    //Route::resource('program','ProgramController');

    Route::get('contact','ContactController@index')->name('contact.index');
    Route::get('book','BookController@index')->name('book.index');
    Route::get('book/create','BookController@create')->name('book.add');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');