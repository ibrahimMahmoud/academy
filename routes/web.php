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
Route::get('/login',['uses'=>'Auth\LoginManualyController@getLogin','as'=>'login']);
Route::get('logout','Auth\LoginManualyController@logout');
Route::get('/home', 'HomeController@index')->name('home');
//LoginManualyController
Route::post('i/login/', 'Auth\LoginManualyController@postLogin');
//SocialLoginController
Route::get('login/fb', 'Api\SocialLoginController@redirectToProvider');
Route::get('login/fb/callback', 'Api\SocialLoginController@handleProviderCallback');


Route::group(['middleware' => 'auth'], function () {
    //ExperienceController
    Route::resource('experince','ExperienceController');
    Route::get('editexper', 'ExperienceController@edit');
    Route::get('addexperience', 'ExperienceController@create');
    Route::post('experince/{id}/update','ExperienceController@update');
    Route::get('experince/{id}/delete','ExperienceController@destroy');
    //ProfileExperienceController
    Route::resource('complete','ProfileExperienceController');
    Route::get('complete_freelancer', 'ProfileExperienceController@create');
    Route::get('complete_employee', 'ProfileExperienceController@EmployeeCreate');

    //EveluationQuestions
    Route::get('positions','EveluationQuestions@positions');
    Route::post('position/{id}/activation','EveluationQuestions@positionActive');
    Route::resource('questions','EveluationQuestions');
    Route::get('questions','EveluationQuestions@questions');
    Route::get('questions/{id}/eveluation','EveluationQuestions@index');
    Route::get('questions/{id}/create','EveluationQuestions@create');
    Route::post('questions/{id}/update','EveluationQuestions@update');
    Route::get('questions/{id}/delete','EveluationQuestions@destroy');
    Route::resource('answers','UserEveluationAnswerController');
    Route::get('answers','UserEveluationAnswerController@index');
    Route::get('project', function () {
        return view('project.index');
    });
    Route::post('addproject', 'ProjectController@store');

    Route::get('editpro', 'ProjectController@edit');


    Route::get('post', 'PostController@index');
    Route::post('addpost', 'PostController@store');

    //open profile
    Route::get('prof', 'HomeController@profile')->name("prof");

    //open timeline
    Route::get('blog', 'HomeController@timeline');

    //send message using ajax
    Route::get('sendmessage', 'ChatController@store');

    //send comment using ajax
    Route::get('sendcomment', 'CommentController@store');
    //like post using ajax
    Route::get('likepost', 'PostController@like');
    //chat page
    Route::get('chat', 'ChatController@index');
    //get messages in chat page using ajax
    Route::get('getmessages', 'ChatController@conversation');
    //get more massages using ajax
    Route::get('getmore', 'ChatController@more');
    //get edit profile page
    Route::get('edit_prof', 'UserController@edit');

    //post new profile data
    Route::post('edit', 'UserController@update');

    Route::post('pro/{id}/update','ProjectController@update');
    Route::get('pro/{id}/delete','ProjectController@destroy');

});
