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

Route::get('/', 'HomesController@index');
// Route::get('/post', 'HomesController@post')->name('blog');
Route::get('/contact', 'HomesController@contact')->name('contact');
Route::post('/kirim','HomesController@simpan')->name('simpan');
Route::get('/newForm','HomesController@newForm')->name('newForm');
Route::post('/simpan','HomesController@store')->name('store');
Route::get('/formEdit/{id}','HomesController@editForm')->name('formEdit');
Route::put('/update/{id}','HomesController@updateForm')->name('formUpdate');
Route::get('/hapus/{id}','HomesController@hapus');
Route::get('/detail/{id}','HomesController@show')->name('detail');
Route::resource('/tampil','ArticlesController');

// tugas menambahkan table buku dengan crud nya
Route::get('/hapusBuku/{id}','BukusController@destroy')->name('hapusBuku');
Route::resource('/about', 'BukusController');

Route::resource('comments','CommentController',['only'=>['store']]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('signup','UsersController@signup')->name('signup');
Route::post('signup','UsersController@signup_store')->name('signup.store');

Route::get('login','SessionsController@login')->name('login');
Route::post('login_store','SessionsController@login_store')->name('login.store');
//this route for check if email user is exist in database
Route::get('forget-password','ReminderController@create')->name('reminders.create');
Route::post('forget-password','ReminderController@store')->name('reminders.store');
// this Route for Handle changes Password
Route::get('reset-password/{id}/{token}','ReminderController@edit')->name('reminders.edit');
Route::post('reset-password/{id}/{token}','ReminderController@update')->name('reminders.update');

Route::get('/beranda', 'SessionsController@beranda')->name('beranda');

Route::get('logout','SessionsController@logout')->name('logout');

Route::group(['prefix'=>'admin', 'middleware'=>['sentinel','hasAdmin']], function(){
    Route::get('/post', 'HomesController@post')->name('blog');
    Route::get('/dashboard','Admin\DashboardAdminController@index')->name('admin.articles.list');
    Route::get('/tesJoB','HomeController@tesJob')->name('tesJob');
});