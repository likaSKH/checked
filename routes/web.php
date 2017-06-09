<?php


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::post('/register/jur','RegisterJurController@create')->name('registerJur');

Route::get('/home', 'HomeController@index')->name('home');

//language change route
Route::post('','LanguageController@language')->name('lang');
