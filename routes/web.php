<?php


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/user/activation/{token}', 'Auth\RegisterController@userActivation' );

Route::get('/home', 'HomeController@index')->name('home');

//language change route
Route::post('','LanguageController@language')->name('lang');
