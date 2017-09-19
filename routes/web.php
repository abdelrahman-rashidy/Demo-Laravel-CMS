<?php
		

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


			// posts 
Route::group([
	'middleware' => ['auth']
],function()
{
Route::get('/Dashboard', 'HomeController@index')->name('home');
Route::get('/posts', 'PostsController@index');		//show all posts
Route::get('/post/create','PostsController@create');  // create
Route::post('/post/store','PostsController@store');		// store not page
Route::get('post/{post}','PostsController@show');	//show spasific post
// Route::
Route::get('post/{post}/edit','PostsController@edit'); // update spacific post

			// Comments Controllers 
Route::post('post/addComment','CommentController@store')->name('postStore');  // create

			//user Controlller
Route::get('user/{user}','UserController@index');
});
