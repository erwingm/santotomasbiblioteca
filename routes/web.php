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
   

    Route::get('category','CategoryController@index')->name('category.index');
    Route::get('category/create','CategoryController@create')->name('category.create');
    Route::post('category/store','CategoryController@store')->name('category.store');
    Route::get('category/edit/{id}','CategoryController@edit')->name('category.edit');
    Route::post('category/update/{id}','CategoryController@update')->name('category.update');
    Route::get('category/delete/{id}','CategoryController@destroy')->name('category.destroy');

    Route::get('distric','DistricController@index')->name('distric.index');
    Route::get('distric/create','DistricController@create')->name('distric.create');
    Route::post('distric/store','DistricController@store')->name('distric.store');
    
    Route::get('book','BookController@index')->name('book.index');
    Route::get('book/create','BookController@create')->name('book.add');

   
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');