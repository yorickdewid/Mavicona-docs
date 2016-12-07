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

Route::get('/', 'Controller@getIndex');

Route::get('/scraper/intro', function () {
    return view('doc_banner');
});

Route::get('/scraper/page', function () {
    return view('doc_page');
});

Route::get('/faq', 'Controller@getFaq');
Route::get('/changelog', 'Controller@getChangeLog');
