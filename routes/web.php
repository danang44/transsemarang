<?php
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home_admin', 'Admin\AdminController@home')->name('home_admin');

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