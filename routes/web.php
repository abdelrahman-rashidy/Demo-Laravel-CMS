<?php
		

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/Dashboard', 'HomeController@index')->name('Dashboard');

			// posts 
			
Route::get('/posts', 'PostsController@index');		//show all posts
Route::get('/post/create','PostsController@create');  // create
Route::post('/post/store','PostsController@store');		// store not page
Route::get('posts/show/{post}','PostsController@show');	//show spasific post
