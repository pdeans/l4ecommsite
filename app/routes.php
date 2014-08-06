<?php


# Default/Home Route
Route::get('/', array('uses' => 'StoreController@getIndex'));

# Admin Routes
Route::controller('admin/categories', 'CategoriesController');
Route::controller('admin/products', 'ProductsController');

# Store Routes
Route::controller('store', 'StoreController');

# User Routes
Route::controller('users', 'UsersController');

