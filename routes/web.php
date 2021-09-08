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
    return view('pages.dashboard.dashboard');
});
Route::get('member','Member\MemberController@index')->name('list-members');
Route::get('reader','Reader\ReaderController@index')->name('list-readers');

Route::get('profile', function () {
    return view('pages.profile.profile');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');