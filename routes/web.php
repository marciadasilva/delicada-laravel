<?php

// Site Routes

Route::get('/', 'SiteController@index')->name('home');
Route::get('/contact', 'SiteController@contact')->name('contact');
Route::post('/contact', 'SiteController@sendMessage');

Route::get('/products', 'SiteController@products');
Route::post('/products', 'SiteController@productsPost');
Route::get('/products/{category}', 'SiteController@product');

// Login Routes

Route::get('/register', 'LoginController@create');
Route::post('/register', 'LoginController@store');
Route::get('/login', 'LoginController@login')->name('login');
Route::post('/login', 'LoginController@signIn');
Route::get('/logout', 'LoginController@destroy'); //testar com POST

// Admin Routes
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/help', 'AdminController@help')->name('help');
Route::get('/admin/company', 'AdminController@company')->name('company');
Route::post('/admin/company', 'AdminController@storeCompany');

// Admin Category Routes
Route::get('/admin/categories', 'AdminController@showCategories')->name('categories');
Route::get('/admin/category/create', 'AdminController@createCategory');
Route::post('/admin/category/create', 'AdminController@storeCategory');
Route::get('/admin/category/edit/{category}', 'AdminController@updateCategory');
Route::post('/admin/category/edit/{category}', 'AdminController@storeUpdateCategory');
Route::get('/admin/category/delete/{category}', 'AdminController@deleteCategory');

// Admin Products Routes
Route::get('/admin/products', 'AdminController@showProducts')->name('products');
Route::get('/admin/product/create', 'AdminController@createProduct');
Route::post('/admin/product/create', 'AdminController@storeProduct');
Route::get('/admin/product/edit/{product}', 'AdminController@updateProduct');
Route::post('/admin/product/edit/{product}', 'AdminController@storeUpdateProduct');
Route::get('/admin/product/delete/{product}', 'AdminController@deleteProduct');

// Admin Clients Routes
Route::get('/admin/clients', 'AdminController@showClients')->name('clients');
Route::get('/admin/client/create', 'AdminController@createClient');
Route::post('/admin/client/create', 'AdminController@storeClient');
Route::get('/admin/client/edit/{client}', 'AdminController@updateClient');
Route::post('/admin/client/edit/{client}', 'AdminController@storeUpdateClient');