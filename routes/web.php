<?php


Route::get('/', function () {
   return view('site.index');
});

Route::get('/login', 'LoginController@index');
