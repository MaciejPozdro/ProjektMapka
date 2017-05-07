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

Route::get('/', 'FrontController@index');

Route::get('/cities', [
    'uses'=>'CitiesController@index',
    'as'=> 'cities.index'
]);
Route::get('/cities/create', [
    'uses'=>'CitiesController@create',
    'as'=> 'cities.create'
]);
Route::post('/cities/store', [
    'uses'=>'CitiesController@store',
    'as'=> 'cities.store'
]);
Route::get('cities/edit/{city}',[
    'uses'=>'CitiesController@edit',
    'as'=> 'cities.edit'
]);
Route::put('cities/{city}',[
    'uses'=>'CitiesController@update',
    'as'=> 'cities.update'
]);
Route::delete('city/{city}',[
    'uses'=>'CitiesController@destroy',
    'as'=> 'cities.delete'
]);
Route::get('/announcements', [
    'uses'=>'AnnouncementsController@index',
    'as'=> 'announcements.index'
]);
Route::get('/announcements/create', [
    'uses'=>'AnnouncementsController@create',
    'as'=> 'announcements.create'
]);
Route::post('/announcements/store', [
    'uses'=>'AnnouncementsController@store',
    'as'=> 'announcements.store'
]);
Route::get('announcements/edit/{announcement}',[
    'uses'=>'AnnouncementsController@edit',
    'as'=> 'announcements.edit'
]);
Route::put('announcements/{announcement}',[
    'uses'=>'AnnouncementsController@update',
    'as'=> 'announcements.update'
]);
Route::delete('announcement/{announcement}',[
    'uses'=>'AnnouncementsController@destroy',
    'as'=> 'announcements.delete'
]);



Route::get('/photos', [
    'uses'=>'PhotosController@index',
    'as'=> 'photos.index'
]);
Route::get('/photos/add', [
    'uses'=>'PhotosController@create',
    'as'=> 'photos.add'
]);
Route::post('/photos/store', [
    'uses'=>'PhotosController@store',
    'as'=> 'photos.store'
]);
Route::get('photos/edit/{photo}',[
    'uses'=>'PhotosController@edit',
    'as'=> 'photos.edit'
]);
Route::put('photos/{photo}',[
    'uses'=>'PhotosController@update',
    'as'=> 'photos.update'
]);
Route::delete('photos/{photo}',[
    'uses'=>'PhotosController@destroy',
    'as'=> 'photos.delete'
]);

Route::get('/', [
    'uses'=>'FrontController@index',
    'as'=> 'front.index'
]);
Route::get('/places/{min}/{max}', [
    'uses'=>'FrontController@places',
    'as'=> 'front.places'
]);

Route::get('/offer/{announcement}', [
    'uses'=>'FrontController@offer',
    'as'=> 'front.offer'
]);
//Route::
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
