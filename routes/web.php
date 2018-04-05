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

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'auth'], function () {
    Route::get('experince', function () {
        return view('experince.index');
    });

    Route::get('project', function () {
        return view('project.index');
    });

    Route::post('addproject', 'ProjectController@store');
    Route::get('post', 'PostController@index');
    Route::post('addpost', 'PostController@store');

});
