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


Route::prefix('admin')->group( function () {
    Route::middleware(['admin'])->group(function () {
        auth()->loginUsingId(6);
        Route::resource('products','ProductController');
        Route::resource('answers','AnswerSetController');
        Route::resource('twists','TwistController');
        Route::resource('news','NewsController');
        Route::resource('articles','ArticleController');
        Route::resource('prediction','PredictionController');
        Route::resource('dead','DeadPartyController');
        Route::post('admin/news/delete','NewsController@destroy');
        Route::post('admin/product/delete','NewsController@destroy');
        Route::post('admin/articles/delete','ArticlesController@destroy');
    });
});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');

Route::get('auth/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('login/twitter', 'Auth\LoginController@redirectToProviderTwitter');

Route::get('auth/twitter/callback', 'Auth\LoginController@handleProviderCallbackTwitter');

Route::get('deadParty','DeadPartyController@show');

Route::get('predictions','PredictionController@show');

Route::get('articles/{slug}','ArticleController@single');

Route::get('news/{slug}','NewsController@single');

Route::get('shop','ProductController@show');

Route::get('login', function() {
    return view('public.login');
})->name('login');

Route::get('twist', 'TwistController@show');

Route::post('twist/user/guess', 'UserGuessController@store');

Route::get('news-articles', 'PostsController@show');

Route::get('share',function(){
   return view('public.share');
});

Route::get('video', function () {
   return view('public.video');
});

Route::get('product/{filter}','ProductController@filter')->name('productFilter');