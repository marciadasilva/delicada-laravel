<?php


Route::get('/', function () { return view('site.index'); })->name('home');

Route::namespace('Admin')->group(function () {
// Register Routes
    Route::get('/register', 'RegistrationController@create');

    Route::post('/register', 'RegistrationController@store');

// Login Routes
    Route::get('/login', 'SessionsController@create')->name('login');

    Route::post('/login', 'SessionsController@store');

    Route::get('/logout', 'SessionsController@destroy'); //testar com POST

// Category Routes

    Route::get('/category/create', 'CategoriesController@create');

    Route::post('/categories', 'CategoriesController@store');

    Route::get('/categories', 'CategoriesController@index')->name('categories');

    Route::get('/categories/{category}', 'CategoriesController@show');

    Route::post('/categories/{category}', 'CategoriesController@update');

    Route::get('/categories/delete/{category}', 'CategoriesController@destroy');

// Product Routes

    Route::get('/product/create', 'ProductsController@create');

    Route::get('/products', 'ProductsController@index')->name('products');

    Route::post('/products', 'ProductsController@store');

    Route::get('/products/{product}', 'ProductsController@show');

    Route::get('/products/{product}', 'ProductsController@edit');

    Route::post('/products/{product}', 'ProductsController@update');

    Route::get('/products/delete/{product}', 'ProductsController@destroy');

// User Routes

    Route::get('/users', 'UserController@index')->name('users');

    Route::get('/users/{user}', 'UserController@show');
});