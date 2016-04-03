<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    'as' => 'home', 'uses' => 'HomeController@index'
]);

Route::get('/questions', [
    'as' => 'questions', 'uses' => 'ResultsController@showQuestions'
]);

Route::get('/results', [
    'as' => 'results', 'uses' => 'ResultsController@queryResults'
]);

Route::get('/self-employed', [
    'as' => 'self-employed', 'uses' => 'ResultsController@getSelfEmployed'
]);

Route::get('/employer-provides-mental-health', [
    'as' => 'employer-provides-mental-health', 'uses' => 'ResultsController@employerProvidesMentalHealth'
]);

Route::get('/unknown-coverage-suspect-condition', [
    'as' => 'unknown-coverage-suspect-condition', 'uses' => 'ResultsController@peopleInUsDontKnowIfTheyHaveCoverageButHaveBeenOrSuspectMentalCondition'
]);

Route::get('/have-issue-not-sought-treatment', [
    'as' => 'have-issue-not-sought-treatment', 'uses' => 'ResultsController@peopleWhoHaveMHIssueThatHaveNotSoughtTreatment'
]);

//Route::get('/import', [
//    'as' => 'import', 'uses' => 'ResultsController@importResults'
//]);
