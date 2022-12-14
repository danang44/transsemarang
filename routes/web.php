<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
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
Route::get('/welcome', 'WelcomeController@index')->name('welcome');
Route::get('/', 'WelcomeController@index');





// Route::group(['middleware' => 'App\Http\Middleware\UserMiddleware'], function () {
Route::get('/welc', 'NewsController@portal')->name('welc');

// Route::get('/', function () {
//     return view('welcome');
// });
// });






Auth::routes();

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function () {


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home_admin', 'Admin\AdminController@home')->name('home_admin');
Route::get('/test', 'Admin\AdminController@test')->name('test');
Route::get('/test2', 'Admin\AdminController@test2')->name('test2');
Route::post('/test_store', 'Admin\AdminController@store');
Route::get('/test3/{id}', 'Admin\AdminController@test3')->name('test3');
Route::get('/test4', 'Admin\AdminController@test4')->name('test4');

//SLIDER
Route::get('/slider', 'Admin\SliderController@index')->name('slider');
Route::post('/slider_store', 'Admin\SliderController@store');
Route::delete('/slider_delete', 'Admin\SliderController@destroy')->name('slider_delete');

//CARD
Route::get('/card', 'Admin\CardController@index')->name('card');
Route::post('/card_store', 'Admin\CardController@store');
Route::delete('/card_delete', 'Admin\CardController@destroy')->name('card_delete');

//ARTICLE
Route::get('/article', 'Admin\ArticleController@index')->name('article');
Route::get('/article_add', 'Admin\ArticleController@add')->name('article_add');
Route::post('/article_store', 'Admin\ArticleController@store');

// Route::post('/article_store', 'Admin\ArticleController@store');
Route::delete('/article_delete', 'Admin\ArticleController@destroy')->name('article_delete');

//BANNER
Route::get('/banner', 'Admin\BannerController@index')->name('banner');
Route::get('/banner_add', 'Admin\BannerController@add')->name('banner_add');

Route::get('/banner_edit', 'Admin\BannerController@edit')->name('banner_edit');
Route::post('/banner_store', 'Admin\BannerController@store');
Route::delete('/banner_delete', 'Admin\BannerController@destroy')->name('banner_delete');
Route::get('/banner_edit/{id}', 'Admin\BannerController@edit')->name('banner_edit');
Route::post('/banner/update', 'Admin\BannerController@update');

//CARD
Route::get('/link', 'Admin\LinkController@index')->name('link');
Route::post('/link_store', 'Admin\LinkController@store');
Route::delete('/link_delete', 'Admin\LinkController@destroy')->name('link_delete');
Route::get('/card_edit/{id}', 'Admin\CardController@edit')->name('card_edit');
Route::post('/card/update', 'Admin\CardController@update');

Route::get('/aboutadd', 'AdminController@aboutadd')->name('aboutadd');
Route::post('/about_process', 'AdminController@about_process');

});
// Route::get('/home', 'Api\HomeController@index');




Route::get('/news', function () {
    return view('/news');
});
Route::get('/news', 'NewsController@index')->name('news');
Route::get('/detailarticle/{title}', 'NewsController@detailarticle');




Route::get('/auth/{provider}', 'Auth\SocialiteController@redirectToProvider');
Route::get('/auth/{provider}/callback', 'Auth\SocialiteController@handleProvideCallback');
