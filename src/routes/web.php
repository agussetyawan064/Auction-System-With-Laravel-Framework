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
Route::get('/beranda', function () {
     return view('user/list_auction');
});
// Route::post('/login', function () {
//      return view('user/login');
// });
// Route::get('/buat_lelang', function () {
//      return view('admin/tambah_lelang');
// });
//Route::post('/register', function () {
  //   return view('user/register');
//});
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


//Admin
// Route::get('/admin/list_auction', function () {
//      return view('admin/list_auction');
// });
Route::get('/admin/list_auction', 'UploadLelang@index');
// Route::get('/admin/list_auction', 'UploadLelang@create');

Route::get('/admin/members', 'DataAdmin@index');
Route::post('/admin/crud/store', 'DataAdmin@store');
Route::post('/admin/crud/update', 'DataAdmin@update');
Route::post('/admin/crud/destroy', 'DataAdmin@destroy');
 //Route::get('/user_members', 'DataUser@tampilData');
//Route::get('/admin/user_members', 'ProsesCrud@index');
Route::get('/admin/show_comment', 'Komentar@tampilData');

// Route::get('/create', function(){
// 	return view('admin/create');
// });
// Route::get('/update', function(){
// 	return view('admin/update');
// });
// Route::get('/', function(){
// 	return redirect()->to('/login');
// });
// Route::resource('crud', 'ProsesCrud');
Route::get('/admin/user_members', 'ProsesCrud@index');
Route::post('/crud/store', 'ProsesCrud@store');
Route::post('/crud/update', 'ProsesCrud@update');
Route::post('/crud/destroy', 'ProsesCrud@destroy');
//Route::resource('crud_lelang', 'UploadLelang');
//
// Auth::routes();


// Route::post('register/verify/{token}','Auth\RegisterController@verify');
// Route::get('/home', 'HomeController@index');


// Route::get('/login','Auth\AuthController@getLogin');
// Route::post('/auth/login','Auth\AuthController@postLogin');

// Route::get('/auth/register','Auth\AuthController@getRegister');
// Route::post('/auth/register','Auth\AuthController@postRegister');


//login
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');




Route::group(['middleware'=>['web','auth']], function(){
Route::resource('admin/crud_lelang', 'UploadLelang');

Route::get('/admin', function(){

     if (!empty(Auth::user()->idlogin)){
          return redirect()->route('crud_lelang.index');
     }
     else{ 
          return redirect()->intended('/');
          }
     });

});

