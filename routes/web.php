<?php

use Illuminate\Support\Facades\Route;

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
// POST HERE -> finished (only validation) 
Route::get('/', 'PostController@index')->name('index'); 
Route::get('/create', 'PostController@create')->name('post.create');
Route::post('/store', 'PostController@store')->name('post.store');
Route::get('/show/{id}', 'PostController@show')->name('post.show');
// work on these
Route::get('/post/list', 'PostController@list')->name('post.list');
Route::get('/post/show', 'PostController@showform')->name('post.show2');
Route::put('/post/edit', 'PostController@edit')->name('post.edit');
Route::delete('/post/delete', 'PostController@delete')->name('post.delete');




// json here
Route::get('/getPosts/{id}', 'PostController@getPosts')->name('getPosts');


// CATEGORIES SECTION
Route::get('/pergjithshme', 'PostController@pergjithshme')->name('pergjithshme');
Route::get('/keqperdorime', 'PostController@keqperdorime')->name('keqperdorime');
Route::get('/korrupsioni', 'PostController@korrupsioni')->name('korrupsioni');
Route::get('/partite', 'PostController@partite')->name('partite');



// THE TEAM SECTION
Route::get('/team', 'TeamController@index')->name('team.index');
Route::get('/teamcreate', 'TeamController@create')->name('team.create');
Route::post('/team/store', 'TeamController@store')->name('team.store');
Route::delete('/team/delete', 'TeamController@delete')->name('team.delete');


// CONTACTS SECTION - (unfinished)
Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@store')->name('contact.store');
Route::get('/admin/contact', 'ContactController@list')->name('contact.list');
Route::delete('/admin/delete', 'ContactController@delete')->name('contact.delete');


Route::get('/app', function(){
    return view('layouts.app');
});

Route::get('/layout', function(){
    return view('layouts.admin');
});