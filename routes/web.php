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

/*===================USER ROUTES ====================*/
Route::group(['namespace'=>'user'],function(){

		Route::get('/','PostController@index')->name('home');

		Route::get('post/{post}','PostController@post')->name('post');

		Route::get('tag/{tag}','PostController@search_tag')->name('tag');

		Route::get('search/{search}','PostController@search')->name('search');

});


/*================ ADMIN ROUTES =======================*/
Route::group(['namespace'=>'admin'],function(){

		/*================= ADMIN HOME ===================*/
		Route::get('admin','Admin@index');

		/*================= POSTS ROUTE ===================*/
		Route::resource('admin/post','PostController');

		/*================= USERS ROUTE ===================*/
		Route::resource('admin/user','userController');
		
		/*================= CATEGORY ROUTE=================*/
		Route::resource('admin/category','CategoryController');
		
		/*================= TAGS ROUTE =====================*/
		Route::resource('admin/tag','TagsController');

		Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
		Route::post('admin-login', 'Auth\LoginController@login');
        // Route::post('admin-login', 'Auth\LoginController@login');
        // Route::post('logout', 'Auth\LoginController@logout')->name('logout');

	});

	Route::get('delete_post/{number}','admin\PostController@delete_post')->name('post_delete');
	Route::get('delete_tag/{number}','admin\TagsController@delete_tag')->name('tag_delete');
	Route::get('delete_category/{number}','admin\CategoryController@delete_category')->name('category_delete');





 /*Route::get("/check",[ 'middleware' => "guest" , function(){
 	echo 'Yaakh Shweeee';
 }]);
  Route::get("/test", function(){
 	echo 'NA DE TA++';
 });*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
