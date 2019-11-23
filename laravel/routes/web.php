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

use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('layouts.main');
});

Route::get('/user', function () {
    return view('layouts.mainLogin');
});









    // ------- blog -------------------------- //

    // Route::get('/blog', 'BlogController@index');


    Route::get('/blog', [
        'as'  => 'blog.index',
        'uses' => 'BlogController@index'
    ]);
    
    
    Route::get('/blog/create', [
        'as'   => 'blog.create',
        'uses'  => 'BlogController@create'
    ]);
    
    
    Route::post('/blog', [
        'as'  => 'blog.store',
        'uses' => 'BlogController@store'
    ]);
    
    Route::get('/blog/{id}', [
        'as'   => 'blog.show',
        'uses'  => 'BlogController@show'
    ]);
    
    Route::get('/blog/{id}/edit', [
        'as' => 'blog.edit',
        'uses' => 'BlogController@edit'
    ]);
    Route::delete('/blog-del/{id}', [
        'as' => 'blog.delete',
        'uses' => 'BlogController@destroy'
    ]);
    
    Route::put('/blog/{id}', [
        'as'   => 'blog.update',
        'uses'  => 'BlogController@update'
    ]);
    
    // ------ end-blog ----------------------- //

    // ------ Dang-Nhap ----------------------- //

    Route::get('/dangnhap', 'LoginController@getdangnhap');

    Route::post('/dangnhap', 'LoginController@postdangnhap');

    Route::get('/logout', 'LogoutController@getLogout');

    // Route::get('/dangnhap',function(){
    //     return view('layouts.main');
    // });

    Route::get('auth/google', 'GoogleController@redirectToProvider');

    Route::get('auth/google/callback', 'GoogleController@handleProviderCallback');