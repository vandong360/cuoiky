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
use App\Http\Controllers\MyController;
use Illuminate\Http\Request;
use App\Quan;

Route::get('/', function () {
    return view('layouts.main');
})->name('page');

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
    

    Route::get('/blog/danhmuc/{cate}', [
        'as'   => 'blog.danhmuc',
        'uses'  => 'BlogController@Danhmuc'
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

    // ------ Dat-san ----------------------- //
   
    Route::get('quan/{idQuan}', 'MyController@indexQuan')->name('quan.index');

    

    Route::get('san/{idSan}', 'MyController@indexSan')->name('san.index');

    Route::post('san/{idSan}/tim-gio', 'MyController@getDate')->name('get.date');

    Route::post('san/book', 'MyController@pushData')->name('push');

    Route::post('messenger', 'MyController@store')->name('book');
       
    // ------ End-dat-san ----------------------- //
 
    // ------ Dang-Nhap ----------------------- //

    Route::get('/dangnhap', 'LoginController@getdangnhap');

    Route::post('/dangnhap', 'LoginController@postdangnhap');

    Route::get('/logout', 'LogoutController@getLogout');


    Route::get('auth/google', 'GoogleController@redirectToProvider');

    Route::get('auth/google/callback', 'GoogleController@handleProviderCallback');

        // ------End-Dang-Nhap ----------------------- //
