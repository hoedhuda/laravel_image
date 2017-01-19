<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::get('/', function () {
 //   return view('welcome');
//});

 Route::get('/', function(){ 
 	return redirect('image'); 

 });
//Route::get('/', 'ImageController@index');


Route::resource('image', 'ImageController'); 
Route::get('create', 'ImageController@create'); 
/*Route::get('/image', function(){
	return view('/image');
});*/ 