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

Route::get("/", "PagesController@index");
Route::post("/tags", "PagesController@tags")->name("tags");
Route::get("/about", "PagesController@about");
Route::get("/contact", "PagesController@contact");
Route::get("/single/{id}", "PagesController@single");
Route::get("/work", "PagesController@work");
Route::get("/test", "PagesController@test");

Route::get('/admin', 'AdminController@index')->name("ad_main");
Route::get('/admin/article/{id}', 'AdminController@edit')->name("ad_edit_get");
Route::post('/admin/article/edit', 'AdminController@pedit')->name('ad_edit_post');


Route::get('/admin/article', 'AdminController@create')->name('ad_create_get');
Route::post('/admin/article', 'AdminController@pcreate')->name('ad_create_post');

Route::get('/admin/article/delete/{id}', 'AdminController@delete')->name('ad_delete_get');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/secret', 'HomeController@secret')->name('secret');

