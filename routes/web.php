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

Route::get('users', function()
{
	$users = App\User::all();
    return View::make('users')->with('users',$users);
});

Auth::routes();

Route::get('/', 'HomeController@home')->name('home');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/profile2', 'HomeController@profile2')->name('profile2');
Route::get('/training', 'HomeController@training')->name('training');
Route::get('/training/{id}', 'HomeController@training');

Route::post('/training/{id}', 'HomeController@training');
Route::get('/admin/ajax/listUsers', function() {
	return Response::json(\App\User::where('id','!=','1')->where('training_class_id','=','0')->get());
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
