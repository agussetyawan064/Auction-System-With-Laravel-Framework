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

Route::get('/beranda_lelang', 'ShowLelang@index');
Route::post('/login', function () {
     return view('user/login_user');
});
// Route::get('/buat_lelang', function () {
//      return view('admin/tambah_lelang');
// });
Route::post('/register', function () {
     return view('user/register');
});
Route::get('/profil_user', function () {
     return view('user/profil');
});
Route::get('/about', function () {
     return view('user/about');
});
Route::get('/requirement', function () {
     return view('user/require');
});
Route::get('/auction_stats', function () {
     return view('user/stats');
});
Route::get('/step_auction', function () {
     return view('user/step');
});
Route::get('/help', function () {
     return view('user/help');
});
Route::get('/change_protected', function () {
     return view('user/protected');
});
Route::get('/my_auction', function () {
     return view('user/my_auction');
});
// Route::get('/list_auction', function () {
//      return view('user/list_auction');
// });
// Route::get('/members', 'DataAdmin@tampilData');
Route::get('/user_members', 'DataUser@tampilData');
// Route::get('/show_comment', 'Komentar@tampilData');

// Route::get('/create', function(){
// 	return view('admin/create');
// });
// Route::get('/update', function(){
// 	return view('admin/update');
// });
// Route::get('/', function(){
// 	return redirect()->to('/crud');
// });
// Route::resource('crud', 'ProsesCrud');
Route::get('/crud', 'ProsesCrud@index');
Route::post('/crud/store', 'ProsesCrud@store');
Route::post('/crud/update', 'ProsesCrud@update');
Route::post('/crud/destroy', 'ProsesCrud@destroy');
Route::resource('crud_lelang', 'UploadLelang');
//
Auth::routes();

Route::post('register/verify/{token}','Auth\RegisterController@verify');
Route::get('/home', 'HomeController@index');
