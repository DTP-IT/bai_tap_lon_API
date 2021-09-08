<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('member', 'Api\Member\MemberController');
Route::resource('reader', 'Api\Reader\ReaderController');
Route::resource('faculty', 'Api\Faculty\FacultyController')->only(['index']);
Route::resource('classStudent', 'Api\ClassStudent\ClassStudentController')->only(['index']);
