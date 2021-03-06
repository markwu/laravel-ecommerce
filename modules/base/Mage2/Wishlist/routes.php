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
Route::group(['middleware' => ['web','website','frontauth'], 'namespace' => "Mage2\Wishlist\Controllers"], function () {

  Route::get('/wishlist/add/{id}', ['as' => 'wishlist.add', 'uses' => 'WishlistController@add']);
  Route::get('/my-account/wishlist', ['as' => 'wishlist.list', 'uses' => 'WishlistController@mylist']);
  Route::get('/wishlist/remove/{id}', ['as' => 'wishlist.remove', 'uses' => 'WishlistController@remove']);

});
