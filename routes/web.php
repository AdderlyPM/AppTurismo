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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('sysadmin/restaurantes', 'RestaurantController', [
	'names' => [
		'edit' => 'restaurant_edit_path',
		'create' => 'restaurant_create_path',
		'store' => 'restaurant_store_path',
		'update' => 'restaurant_update_path',
	]
]);
Route::resource('sysadmin/platos', 'DishController', [
	'names' => [
		'edit' => 'dish_edit_path',
		'create' => 'dish_create_path',
		'store' => 'dish_store_path',
		'update' => 'dish_update_path',
	]
]);

Route::get('sysadmin/restaurantes/{id}/delete',  ['middleware' => ['auth'],'as' => 'restaurant_destroy_path', 'uses' => 'RestaurantController@destroy']);
