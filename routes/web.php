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

Route::get('/testing', function(){
    return view('testing');
});

Route::get('/survey_session/new','SurveySessionController@create')->name('surveysession.create');

Route::post('/survey_session/submit','SurveySessionController@store')->name('surveysession.store');

Route::get('/survey_session/view','SurveySessionController@index')->name('surveysession.index');


