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

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/admin', function () {
//     return view('admin.index');
// });

Route::middleware(['level'])->group(function () {
    Route::group(['prefix'=>'/admin'],function(){   
        Route::get('/',function(){ return view('admin.index'); });
        Route::resource('/user', 'UserController'); 
        
    });
});
// Route::get('/home', 'AdminCo');
// ]);
//Route::get('/posts','PostController@index');
Route::get('/create','PostController@create');
Route::post('/edit','PostController@store');
Route::get('/master',[
    'as'=>'master',
    'uses'=>'Postcontroller@index'
]);
Route::get('/editpost/{id}','PostController@edit');
Route::put('/update/{id}','PostController@update');
Route::delete('master/{id}','PostController@destroy');
// Route::get('/blabla',function(){
//     return view('admin.404');
// });
