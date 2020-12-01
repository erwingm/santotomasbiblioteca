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

Route::get('Actividades', 'PagesController@activity')->name('pages.activity');

Route::get('/', 'HomeController@index')->name('book.index');
// Route::get('books','BookController@index');
Route::get('/slider','SliderController@index')->name('slider');

Route::get('/book/{slug}','BookController@details')->name('book.details');

Route::get('tramite', 'PagesController@procedure')->name('pages.procedure');

Route::get('actividades','PagesController@activity')->name('page.activity');

Route::get('tramite', 'PagesController@procedure')->name('pages.tramite');

Route::post('tramite/store', 'PagesController@procedurestore')->name('pages.procedure.store');

Route::get('nosotros', 'PagesController@information')->name('page.information');

Route::get('investigacion','PagesController@investigation')->name('pages.investigation');

Route::get('/categorias/{slug}','PagesController@postByCategory')->name('category.books');
Route::get('/tag/{slug}','PagesController@bookByTag')->name('tag.books');
Route::get('/fisico/{slug}','PagesController@bookByFisico')->name('fisico.books');


Route::get('/search', 'SearchController@search')->name('search');








// Rutas del Administrador
Route::group(['prefix' => 'admin', 'namespace'=> 'Admin', 'middleware' => 'auth'], function(){
    
    Route::get('/', 'AdminController@index');

    Route::get('procedure','ProcedureController@index')->name('procedure.index');

    Route::get('objective','ObjetiveController@index')->name('objective.index');
    Route::get('objective/create','ObjetiveController@create')->name('objective.create');
    Route::post('objective/store','ObjetiveController@store')->name('objective.store');
    Route::get('objective/edit/{id}','ObjetiveController@edit')->name('objective.edit');
    Route::put('objective/update/{id}','ObjetiveController@update')->name('objective.update');
    Route::delete('objective/delete/{id}','ObjetiveController@destroy')->name('objective.destroy');

    Route::get('story','StoryController@index')->name('story.index');
    Route::get('story/create','StoryController@create')->name('story.create');
    Route::post('story/store','StoryController@store')->name('story.store');
    Route::get('story/edit/{id}','StoryController@edit')->name('story.edit');
    Route::put('story/update/{id}','StoryController@update')->name('story.update');
    Route::delete('story/delete/{id}','StoryController@destroy')->name('story.destroy');

    Route::get('vision','VisionController@index')->name('vision.index');
    Route::get('vision/create','VisionController@create')->name('vision.create');
    Route::post('vision/store','VisionController@store')->name('vision.store');
    Route::get('vision/edit/{id}','VisionController@edit')->name('vision.edit');
    Route::put('vision/update/{id}','VisionController@update')->name('vision.update');
    Route::delete('vision/delete/{id}','VisionController@destroy')->name('vision.destroy');

    

    Route::get('investigation','InvestigationController@index')->name('investigation.index');
    Route::get('investigation/create','InvestigationController@create')->name('investigation.create');
    Route::post('investigation/store','InvestigationController@store')->name('investigation.store');
    Route::get('investigation/edit/{id}','InvestigationController@edit')->name('investigation.edit');
    Route::put('investigation/update/{id}','InvestigationController@update')->name('investigation.update');
    Route::delete('investigation/delete/{id}','InvestigationController@destroy')->name('investigation.destroy');


    Route::get('slider','SliderController@index')->name('slider.index');
    Route::get('slider/create','SliderController@create')->name('slider.create');
    Route::post('slider/store','SliderController@store')->name('slider.store');
    Route::get('slider/edit/{id}','SliderController@edit')->name('slider.edit');
    Route::put('slider/update/{id}','SliderController@update')->name('slider.update');
    Route::delete('slider/delete/{id}','SliderController@destroy')->name('slider.destroy');


    // Route::resource('investigation','InvestigationController');
    
    Route::get('tag','TagController@index')->name('tag.index');
    Route::get('tag/create','TagController@create')->name('tag.create');
    Route::post('tag/store','TagController@store')->name('tag.store');
    Route::get('tag/edit/{id}','TagController@edit')->name('tag.edit');
    Route::put('tag/update/{id}','TagController@update')->name('tag.update');
    Route::delete('tag/delete/{id}','TagController@destroy')->name('tag.destroy');

    Route::get('category','CategoryController@index')->name('category.index');
    Route::get('category/create','CategoryController@create')->name('category.create');
    Route::post('category/store','CategoryController@store')->name('category.store');
    Route::get('category/edit/{id}','CategoryController@edit')->name('category.edit');
    Route::post('category/update/{id}','CategoryController@update')->name('category.update');
    Route::delete('category/delete/{id}','CategoryController@destroy')->name('category.destroy');

    Route::get('distric','DistricController@index')->name('distric.index');
    Route::get('distric/create','DistricController@create')->name('distric.create');
    Route::post('distric/store','DistricController@store')->name('distric.store');
    Route::get('distric/edit/{id}','DistricController@edit')->name('distric.edit');
    Route::post('distric/update/{id}','DistricController@update')->name('distric.update');
    Route::delete('distric/delete/{id}','DistricController@destroy')->name('distric.destroy');

    Route::get('editorial', 'EditorialController@index')->name('editorial.index');
    Route::get('editorial/create', 'EditorialController@create')->name('editorial.create');
    Route::post('editorial/store','EditorialController@store')->name('editorial.store');
    Route::get('editorial/edit/{id}','EditorialController@edit')->name('editorial.edit');
    Route::post('editorial/update/{id}','EditorialController@update')->name('editorial.update');
    Route::delete('editorial/delete/{id}','EditorialController@destroy')->name('editorial.destroy');

    Route::get('author', 'AuthorController@index')->name('author.index');
    Route::get('author/create','AuthorController@create')->name('author.create');
    Route::post('author/store','AuthorController@store')->name('author.store');
    Route::get('author/edit/{id}','AuthorController@edit')->name('author.edit');
    Route::post('author/update/{id}','AuthorController@update')->name('author.update');
    Route::delete('author/delete/{id}','AuthorController@destroy')->name('author.destroy');

    Route::get('institute','InstituteController@index')->name('institute.index');
    Route::get('institute/create','InstituteController@create')->name('institute.create');
    Route::post('institute/store','InstituteController@store')->name('institute.store');
    Route::get('institute/edit/{id}','InstituteController@edit')->name('institute.edit');
    Route::post('institute/update/{id}','InstituteController@update')->name('institute.update');
    Route::delete('institute/delete/{id}','InstituteController@destroy')->name('institute.destroy');


    Route::get('activity','ActivityController@index')->name('activity.index');
    Route::get('activity/create','ActivityController@create')->name('activity.create');
    Route::post('activity/store','ActivityController@store')->name('activity.store');
    Route::get('activity/{activity}','ActivityController@edit')->name('admin.activity.edit');
    Route::put('activity/update/{activity}','ActivityController@update')->name('activity.update');


    Route::post('activity/{activity}/photos','PhotoController@store')->name('admin.activity.photos.store');
    Route::delete('photos/{photo}', 'PhotoController@destroy')->name('admin.photos.destroy');
    // Route::post('activity/{id}/photos','PhotoController@store')->name('activity.photo.store');

       
    Route::get('book','BookController@index')->name('book.index');
    Route::get('book/create','BookController@create')->name('book.add');
    Route::post('book/store','BookController@store')->name('book.store');
    Route::get('book/edit/{id}','BookController@edit')->name('book.edit');
    Route::put('book/update/{id}','BookController@update')->name('book.update');
    Route::delete('book/delete/{id}','BookController@destroy')->name('book.destroy');
    Route::get('book/show/{id}','BookController@show')->name('book.show');

   
});

Auth::routes();

