<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('birthdayauthors', 'API\AuthorController@brithdays');
Route::get('anniversaryauthors', 'API\AuthorController@anniversaries');
Route::get('search', 'API\AuthorController@search');
Route::get('popularauthor', 'API\AuthorController@popular');
Route::get('populartopic', 'API\TopicController@popular');
Route::get('authorsinnews', 'API\AuthorController@news');
Route::get('authorsexplore', 'API\AuthorController@explore');
Route::get('alphabet', 'API\AuthorController@alphabet');
Route::get('authorquotes', 'API\AuthorController@authorQuotes');
Route::get('authortopquotes', 'API\AuthorController@authorTopQuotes');
Route::get('topicquotes', 'API\TopicController@topicQuotes');
Route::get('randomQuotesHome', 'API\QuoteController@randomQuotesHome');
Route::get('aboutjson', 'API\AboutController@aboutjson');
Route::get('authorslist', 'API\AuthorController@authorslist');
Route::get('topicslist', 'API\TopicController@topics');
Route::get('addkeyword', 'API\TopicController@keywords');
Route::get('getTopicindices', 'API\KeywordIndexController@indices');
Route::get('getindices', 'API\KeywordController@allindices');



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
