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



Route::get('blog', 'BlogController@index');
Route::get('blog/single/{id}', 'BlogController@show')->name('blog.single');
Route::get('admin/blog', 'PostController@index')->name('admin');
Route::get('admin/create/post', 'PostController@create')->name('post.create');
Route::post('admin/store/post', 'PostController@store')->name('post.store');
Route::get('admin/show/post/{id}', 'PostController@show')->name('post.show');
Route::get('admin/edit/post/{id}', 'PostController@edit')->name('post.edit');
Route::post('admin/update/post/{id}', 'PostController@update')->name('post.update');
Route::delete('admin/store/post/{id}', 'PostController@store')->name('post.delete');




//Route::resource('posts','PostsController');
