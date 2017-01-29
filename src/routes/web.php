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

Route::get('/beranda', function () {
     return view('user/list_auction');
});
Route::get('/login', function () {
     return view('user/login_user');
});
Route::get('/buat_lelang', function () {
     return view('admin/tambah_lelang');
});
Route::get('/register', function () {
     return view('user/register');
});
// Route::get('/members', 'DataAdmin@tampilData');
// Route::get('/user_members', 'DataUser@tampilData');
// Route::get('/show_comment', 'Komentar@tampilData');

// Route::get('/create', function(){
// 	return view('admin/create');
// });
// Route::get('/update', function(){
// 	return view('admin/update');
// });
Route::get('/', function(){
	return redirect()->to('/crud');
});
// Route::resource('crud', 'CrudController');
Route::get('/crud', 'ProsesCrud@index');
Route::post('/crud/store', 'ProsesCrud@store');
Route::post('/crud/update', 'ProsesCrud@update');
Route::post('/crud/destroy', 'ProsesCrud@destroy');

//
// Auth::routes();
// //
// Route::get('/home', 'HomeController@index');
