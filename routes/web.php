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
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localize']
    ],
    function () {
        Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
        Route::get('legal/'.LaravelLocalization::transRoute('website.2'), ['as' => 'privacy_policy', 'uses' => 'HomeController@privacy_policy']);
        Route::get('legal/'.LaravelLocalization::transRoute('website.3'), ['as' => 'cookies_policy', 'uses' => 'HomeController@cookies_policy']);
        Route::get('legal/'.LaravelLocalization::transRoute('website.4'), ['as' => 'impressum', 'uses' => 'HomeController@impressum']);
        Route::get('legal/'.LaravelLocalization::transRoute('website.5'), ['as' => 'terms', 'uses' => 'HomeController@terms']);
        Route::get('/{blog_slug}', 'BlogController@blog_single');
    }
);
Route::get('/sitemap', 'HomeController@sitemap');
