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
use App\Blog;

$locations = Blog::where('active', 1)->get();

foreach ($locations as $location) {
    Route::group(
        [
        'prefix' => LaravelLocalization::setLocale($location->language_code),
        'middleware' => ['localize', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
        function () {
            Route::get('/{blog_slug}', 'BlogController@blog_single');
        }
);
}

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localize', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
        Route::get(LaravelLocalization::transRoute('website.2'), ['as' => 'services', 'uses' => 'BlogController@services']);
    }
);
