<?php

use Illuminate\Support\Facades\Route;

//use Illuminate\Support\Facades\Auth;

//Auth::logout();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@hello')->name('hello');

Route::get('/timeline', 'TweetsController@timeline');
Route::post('/tweet/create', 'TweetsController@createTweet');
Route::get('/tweet/deatil/{tweet_id}', 'TweetsController@displayTweetdetails');

Route::get('/contact', 'ContactController@contact')->name('contact');
Route::post('/contact', 'ContactController@contactPost')->name('contactPost');


//languge
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

Route::get('/languageDemo', 'HomeController@languageDemo');
//Route::get('lang/{lang}', 'LanguageController@switchLang')->name('lang.switch');
Route::get('/getdata', 'APIController@getDataFromExtrnalAPI');
