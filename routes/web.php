<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//language change route
Route::post('lang','LanguageController@language')->name('lang');