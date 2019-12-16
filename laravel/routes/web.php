<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\MyController;
use Illuminate\Http\Request;
use App\Quan;

    Route::get('/', function () {
        return view('layouts.main');
    })->name('page');

    // ------- blog -------------------------- //

    Route::get('/blog', 'BlogController@index')->name('blog.index');

    Route::get('/blog/create', 'BlogController@create')->name('blog.create');

    Route::post('/blog', 'BlogController@store')->name('blog.store');
  
    Route::get('/blog/danhmuc/{cate}', 'BlogController@Danhmuc')->name('blog.danhmuc');

    Route::get('/blog/{id}', 'BlogController@show')->name('blog.show');

    Route::get('/blog/{id}/edit', 'BlogController@edit')->name('blog.edit');

    Route::delete('/blog-del/{id}','BlogController@destroy')->name('blog.delete');

    Route::put('/blog/{id}','BlogController@update')->name('blog.update');

    // ------ end-blog ----------------------- //

    // ------ Dat-san ----------------------- //
   
    Route::get('quan/{idQuan}', 'MyController@indexQuan')->name('quan.index');

    Route::get('san/{idSan}', 'MyController@indexSan')->name('san.index');

    Route::post('san/{idSan}/tim-gio', 'MyController@getDate')->name('get.date');

    Route::post('san/book', 'MyController@pushData')->name('push');

    Route::post('messenger', 'MyController@store')->name('book');
       
    // ------ End-dat-san ----------------------- //
 
    // ------ Dang-Nhap Dang-Ky ----------------------- //
    
    Route::get('auth/register', 'LoginController@getReg')->name('get.reg');

    Route::post('auth/register', 'LoginController@postReg')->name('post.reg');


    Route::get('/logout', 'LogoutController@getLogout')->name('logout');

    Route::get('auth/login', 'LoginController@getLogin')->name('login');

    Route::post('/user', 'LoginController@postLogin')->name('post.login');
        // ------End-Dang-Nhap ----------------------- //


    // ----------    Administrator      ------------------- //
    Route::get('admin/manager/user', 'MyController@listUser')->name('list.user');

    Route::get('admin/manager/book', 'MyController@listBook')->name('list.book');

    Route::delete('admin/manager/user/{id}', 'MyController@destroy')->name('del.user');