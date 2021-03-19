<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
 
Route::get('/post/{post}', 'PostController@show')->name('post');

Route::middleware('auth')->group(function(){
Route::get('/admin', 'AdminsController@index')->name('admin.index');

Route::get('/admin/posts', 'PostController@index')->name('post.index');
    
Route::post('/admin/posts', 'PostController@store')->name('post.store');

Route::get('/admin/posts/create', 'PostController@create')->name('post.create');

    

Route::get('/admin/posts/{post}/edit', 'PostController@edit')->name('post.edit');

Route::delete('/admin/posts/{post}/delete', 'PostController@destroy')->name('post.destroy');

Route::put('/admin/posts/{post}/update', 'PostController@update')->name('post.update');

Route::get('/admin/posts/{post}/approved', 'PostController@approved')->name('post.approved');

    

    

   
});

