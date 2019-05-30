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
    return view('guest.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/admin', function () {
//     return view('admin.index');
// });

Route::middleware(['level'])->group(function () {
    Route::group(['prefix'=>'/admin'],function(){   
        Route::get('/',function(){ return view('admin.index'); });
        Route::resource('/user', 'UserController'); 
        
    });
});