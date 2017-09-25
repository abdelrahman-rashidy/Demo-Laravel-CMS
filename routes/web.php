<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('post/{post}','PostsController@show');							// show spasific post
Route::get('/posts', 'PostsController@index')->name('PostIndex');							// show all posts

Auth::routes();

			// posts
Route::group( [ 'middleware' => ['auth'] ],function(){

	Route::get('/Dashboard', 'HomeController@index')->name('home');
																							/******************/
	Route::get('/posts/create','PostsController@create')->name('CreatePage');	// create /post/create Doesn't work why ??
	Route::post('/post/store','PostsController@store')->name('StorePosts');		// store not page
	Route::get('post/{post}/edit','PostsController@edit');  					// show edit page for spacific post
	Route::patch('post/update','PostsController@update')->name('UpdatePost');	//

				// Comments Controllers
	Route::post('post/{post}/comments','CommentsController@store')->name('postStore');  // create Comment
	Route::delete('/');

				//user Controlller
	// Route::get('user/{user}','UserController@index');

});
