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

Route::get('login/fb', 'Api\SocialLoginController@redirectToProvider');
Route::get('login/fb/callback', 'Api\SocialLoginController@handleProviderCallback');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('experince','ExperienceController');
    Route::post('experince/{id}/update','ExperienceController@update');
    Route::get('experince/{id}/delete','ExperienceController@destroy');
    Route::get('project', function () {
        return view('project.index');
    });

    Route::post('addproject', 'ProjectController@store');
    Route::get('post', 'PostController@index');
    Route::post('addpost', 'PostController@store');

});
