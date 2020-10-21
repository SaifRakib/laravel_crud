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


Route::get('/articles', 'ArticleController@show')->name('article');
Route::get('/articles/add', 'ArticleController@addArticle')->name('article.add');
Route::post('/articles/add', 'ArticleController@saveArticle')->name('article.save');
Route::get('/articles/edit/{id}', 'ArticleController@editArticle')->name('article.edit');
Route::post('/articles/edit/{id}', 'ArticleController@updateArticle')->name('article.update');
Route::get('/articles/delete/{id}', 'ArticleController@deleteArticle')->name('article.delete');





Route::get('/', function () {
    return view('welcome');
});


