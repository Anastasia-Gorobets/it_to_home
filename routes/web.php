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
    return view('welcome');
});

Route::get('/teachers', 'TeacherController@index')->name('teachers');
Route::post('/teachers', ['as' => 'messages.storeTeacherMessage', 'uses' => 'MessagesController@storeTeacherMessage']);




Route::group(['prefix' => 'messages'], function () {
    Route::get('/', ['as' => 'messages', 'uses' => 'MessagesController@index']);
    Route::get('create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
    Route::post('/', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
    Route::get('{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
    Route::put('{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/test', 'SomeController@testfunction');
Route::post('/test', 'SomeController@testfunction');

Route::post('/teachers/favourite','TeacherController@favorite')->name('teachers.favorite');


Route::post('favorites',['as'=>'favorites.store', 'uses'=>'FavoriteController@store']);
//Route::delete('favorites/{teacherId}',['as'=>'favorites.destroy', 'uses'=>'FavoriteController@destroy']);
Route::delete('favorites/{teacher_id}',['as'=>'favorites.destroy','uses'=>'FavoriteController@destroy']);


Route::get('user/{userId}/favorites',['as'=>'user.favorites','uses'=>'UserController@favorites']);


Route::get('error403',['as'=>'error/403','uses'=>'ErrorController@error403']);
Route::get('about',['as'=>'about',function(){
    return 'About page';
}]);





