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
Route::get('evaluation', function () {
    return view('evaluation');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('academy', function () {
    return view('academy');
});

Route::get('blog', function () {
    return view('index');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::post('i/login/', 'Auth\LoginManualyController@postLogin');
Route::get('login/fb', 'Api\SocialLoginController@redirectToProvider');
Route::get('login/fb/callback', 'Api\SocialLoginController@handleProviderCallback');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('experince','ExperienceController');
    Route::get('editexper', 'ExperienceController@edit');
    Route::get('addexperience', 'ExperienceController@create');
    Route::post('experince/update/{id}','ExperienceController@update');
    Route::get('experince/{id}/delete','ExperienceController@destroy');
    
    Route::resource('complete','ProfileExperienceController');
    Route::get('complete_freelancer', 'ProfileExperienceController@create');
    Route::get('complete_employee', 'ProfileExperienceController@EmployeeCreate');

<<<<<<< HEAD
=======
    Route::resource('answers','UserEveluationAnswerController');

    Route::get('project', function () {
        return view('project.index');
    });

>>>>>>> c6b961021dcf35ae6c03aeee29f58176506079dc
    Route::post('addproject', 'ProjectController@store');
    Route::get('post', 'PostController@index');
    Route::post('addpost', 'PostController@store');
    Route::get('prof', 'HomeController@index');
    Route::get('blog', 'HomeController@timeline');
    Route::post('sendmessage', 'ChatController@store');
    Route::post('sendcomment', 'CommentController@store');


});
