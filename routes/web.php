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
    return view('index');
});

Route::get('/banner', function () {
    return view('component_banner_sample1');
});

Route::get('/index', function () {
    return view('layout_full_left-sidebar');
});

Route::get('/faq', function () {
    return view('page_faq');
});

Route::get('/changelog', function () {
    return view('changelog');
});

