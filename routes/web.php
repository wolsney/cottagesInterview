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

/*Route::get('/', function () {
	$properties = App\properties::paginate(5);
    return view('welcome', ["properties"=>$properties]);
});*/

Route::get('/', 'SearchController@index');

Route::post('/search', 'SearchController@search');
