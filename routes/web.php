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
// POST HERE -> needs some modifying 
Route::get('/', 'PostController@index')->name('index'); 
Route::get('/create', 'PostController@create')->name('post.create');
Route::post('/store', 'PostController@store')->name('post.store');
Route::get('/show/{id}', 'PostController@show')->name('post.show');
Route::get('/edit/{id}', 'TableController@edit')->name('post.edit');
Route::put('/update/{id}', 'TableController@update')->name('post.update');
Route::delete('/delete/{id}', 'TableController@destroy')->name('post.delete');


// POST LISTS - Admin side (needs authentication)
Route::get('/favorite', 'TableController@favorite')->name('favorite');
Route::get('/firstpage', 'TableController@firstPage')->name('firstPage');
Route::get('/allposts', 'TableController@allPosts')->name('allPosts');

// json here
Route::get('/getPosts/{type}', 'PostController@getPosts')->name('getPosts');
Route::get('/getPosts/{type}/{id}', 'PostController@getCategoryPosts')->name('getCategoryPosts');


// CATEGORIES SECTION -> finished
Route::get('/4', 'PostController@pergjithshme')->name('pergjithshme');
Route::get('/1', 'PostController@keqperdorime')->name('keqperdorime');
Route::get('/2', 'PostController@korrupsioni')->name('korrupsioni');
Route::get('/3', 'PostController@partite')->name('partite');



// THE TEAM SECTION -> (work on these)
Route::get('/team', 'TeamController@index')->name('team.index');
Route::get('/teamcreate', 'TeamController@create')->name('team.create');
Route::post('/team/store', 'TeamController@store')->name('team.store');
Route::delete('/team/delete', 'TeamController@delete')->name('team.delete');


// CONTACTS SECTION -> (work on these)
Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@store')->name('contact.store');
Route::get('/admin/contact', 'ContactController@list')->name('contact.list');
Route::delete('/admin/delete', 'ContactController@delete')->name('contact.delete');


// Route::get('/app', function(){
//     return view('layouts.app');
// });

// Route::get('/layout', function(){
//     return view('layouts.admin');
// });