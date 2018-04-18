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
Route::get('add_ex', function () {
    return view('add-experience');
});
Route::get('add_pro', function () {
    return view('add-project');
});

Route::get('edit_prof', function () {
    return view('edit_profile');
});
Route::get('blog', function () {
    return view('index');
});
Route::get('prof', function () {
    return view('profile');
});
Route::get('signup', function () {
    return view('signup');
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
    Route::post('experince/{id}/update','ExperienceController@update');
    Route::get('experince/{id}/delete','ExperienceController@destroy');
    
    Route::resource('complete','ProfileExperienceController');
    Route::get('complete_freelancer', 'ProfileExperienceController@create');
    Route::get('complete_employee', 'ProfileExperienceController@EmployeeCreate');

    Route::resource('answers','UserEveluationAnswerController');

    Route::get('project', function () {
        return view('project.index');
    });

    Route::post('addproject', 'ProjectController@store');
    Route::get('post', 'PostController@index');
    Route::post('addpost', 'PostController@store');
    Route::get('prof', 'HomeController@profile')->name("prof");
    Route::get('blog', 'HomeController@timeline');

    // Send Message 
    Route::get('sendmessage', 'ChatController@store');

    // Send Comment
    Route::get('sendcomment', 'CommentController@store');


});
