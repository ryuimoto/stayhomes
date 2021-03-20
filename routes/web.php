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



Route::group(['middleware' => 'auth.very_basic'], function() {
    Route::get('/','Practice\PracticeConttroller@index');

    Route::prefix('practice')->group(function () {
        Route::get('video_call','Practice\PracticeConttroller@videoCall')->name('video_call');
    });

    Route::get('test',function(){
        return 'pull!!!';
    });
});