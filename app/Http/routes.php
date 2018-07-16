<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::get('/',['as' => 'anggota.list','uses' => 'AnggotaController@listAnggota']);
	Route::get('/new',['as' => 'anggota.new','uses' => 'AnggotaController@newAnggota']);
	Route::get('/{anggota}/edit',['as' => 'anggota.edit','uses' => 'AnggotaController@editAnggota']);
	Route::get('/{anggota}/delete',['as' => 'anggota.delete','uses' => 'AnggotaController@deleteAnggota']);

	Route::post('/{anggota}/update',['as' => 'anggota.update','uses' => 'AnggotaController@updateAnggota']);
	Route::post('/save',['as' => 'anggota.save','uses' => 'AnggotaController@saveAnggota']);

	Route::get('home', 'HomeController@showHalaman');
	Route::get('/about', 'AboutController@showAbout');
	Route::get('/contact', 'ContactController@showContact');

	Route::controllers(['auth' => 'Auth\AuthController','password' => 'Auth\PasswordController']);
});