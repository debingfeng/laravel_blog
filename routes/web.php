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
    return redirect('/blog');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('blog', 'BlogController@index');
Route::get('blog/{slug}', 'BlogController@showPost');


Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    Route::resource('posts', 'PostsController');
    Route::resource('categories', 'CategoriesController');
    Route::resource('links', 'LinksController');
    Route::resource('labels', 'LabelsController');

    Route::get('admin/setting', function () {
        // 使用 Auth 中间件
    })->name('setting');
});
//Route::get('blog/{slug}', 'BlogController@showPost');
