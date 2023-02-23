<?php

use Illuminate\Support\Facades\Route;

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

/* START Author Controller */

// Main Menu Top Navigations 
Route::get('/authors', 'API\AuthorController@authors')->name('authors');
Route::get('/authors/{aphabet}', 'API\AuthorController@authoraphabet')->name('authors.alphabet');
Route::get('/author/{author}', 'API\AuthorController@authorquotespage')->name('author.quotes');
Route::get('/nationality/{nationality}', 'API\AuthorController@authornationalityquotes')->name('author.nationality.quotes');
Route::get('/lists/{author}', 'API\AuthorController@authortop10quotespage')->name('author.top.10.quotes');
Route::get('/profiles/{author}', 'API\AuthorController@authorprofilepage')->name('author.profile');

// Birthdays and Anniversaries
Route::get('/birthdays', 'API\AuthorController@birthdaysall')->name('author.birthdays');
Route::get('/birthdays/{today}', 'API\AuthorController@todaybirthdays')->name('author.today.birthdays');
Route::get('/anniversaries', 'API\AuthorController@anniversariesall')->name('author.anniversaries');
Route::get('/anniversaries/{today}', 'API\AuthorController@todayanniversaries')->name('author.today.anniversaries');

Route::get('/profession', 'API\AuthorController@professionlist')->name('author.profession');

/* END Author Controller */

/* START Topic Controller */

Route::get('/topics', 'API\TopicController@topicspage')->name('topics');
Route::get('/topics/{topic}', 'API\TopicController@topicquotespage')->name('topic.quotes');
Route::get('/topic_index/{index}', 'API\TopicController@topicindices')->name('topic.indices');

/* END Topic Controller */

/* START Quote Controller pages */

Route::get('/quotes-videos', 'API\QuoteController@quotevideos')->name('quotes.videos');
Route::get('/quote-pictures', 'API\QuoteController@picturequotes')->name('quote.picture'); // Show all small length quotes with pictures in thumbnail form. "Picture" Menu Click
Route::get('/picture', 'API\QuoteController@picturequotes')->name('picture.quotes'); // Show list of quotes with pictures similar to above quote.picture route. It is duplicate and we need to redirect it to new URL. 

//Top 100 Quotes and Quote of the Day.
Route::get('/top-100-quotes', 'API\QuoteController@top100quotes')->name('top.100.quotes');
Route::get('/quote-of-the-day', 'API\QuoteController@quoteoftheday')->name('today.quote');

//Search 
Route::get('/search', 'API\QuoteController@search')->name('search.home');

//Quotes List Pages.
Route::get('/profession/{profession}', 'API\QuoteController@professionquotes')->name('profession.quotes');

/* END Quote Controller pages */

/* START About Controller pages */

Route::get('/about', 'API\AboutController@index')->name('about.home');
Route::get('/about/contact-us', 'API\AboutController@contact')->name('about.contact');
Route::get('/about/submit-quote', 'API\AboutController@submitquote')->name('about.submit');
Route::get('/about/privacy', 'API\AboutController@privacy')->name('about.privacy');
Route::get('/about/faqs', 'API\AboutController@faqs')->name('about.faqs');

/* END About Controller pages */

/* START Share Social Media */

Route::get('/share/{media}/{urlid}', 'API\ShareController@index')->name('share.home');

/* END Share Social Media */