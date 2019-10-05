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

Route::get('/test',function(){

	return App\User::find(1)->profile;
});

Route::get('/',[

	'uses' => 'FrontendController@index',
	'as'=> 'index'
]);

Route::get('/results', function(){

	$posts= \App\Post::where('title','like',  '%' . request('query') . '%')->get();

	return view('results')->with('posts',$posts)
						  ->with('title','Search results : ' . request('query'))
    					  ->with('settings', \App\Setting::first())
    					  ->with('categories', \App\Category::take(5)->get())
    					  ->with('query',request('query'));
});

Route::get('post/{slug}', [

	'uses' => 'FrontendController@singlePost',
	'as' => 'post.single'	
]);      

Route::get('/category/{id}',[

	'uses'=> 'FrontendController@category',
	'as'=> 'category.single'

]);

Route::get('/tag/{id}',[

	'uses'=> 'FrontendController@tag',
	'as' =>'tag.single'	
]);

Auth::routes();



Route::group(['prefix'=>'admin','middleware' => 'auth'] ,function(){

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/posts/create',[

	'uses'=> 'PostsController@create',
	'as' => 'post.create'

]);

Route::post('/posts/store', [

	'uses' => 'PostsController@store',
	'as' => 'post.store'
]);

Route::get('/posts',[

	'uses'=> 'PostsController@index',
	'as' => 'posts'

]);

Route::get('/posts/trashed',[

	'uses'=> 'PostsController@trashed',
	'as' => 'posts.trashed'

]);

Route::get('/posts/kill/{id}',[

	'uses'=> 'PostsController@kill',
	'as' => 'post.kill'

]);

Route::get('/posts/delete/{id}',[

	'uses'=> 'PostsController@destroy',
	'as' => 'post.delete'

]);

Route::get('/posts/restore/{id}',[

	'uses'=> 'PostsController@restore',
	'as' => 'post.restore'

]);

Route::get('/posts/edit/{id}',[

	'uses'=> 'PostsController@edit',
	'as' => 'post.edit'

]);

Route::post('/posts/update/{id}',[

	'uses'=> 'PostsController@update',
	'as' => 'post.update'

]);

Route::get('/category/create', [
	'uses'=> 'CategoriesController@create',
	'as'=> 'category.create'
]);

Route::get('/categories', [
	'uses'=> 'CategoriesController@index',
	'as'=> 'categories'
]);

Route::post('/category/store', [
	'uses'=> 'CategoriesController@store',
	'as'=> 'category.store'
]);

Route::get('/category/edit/{id}',[

	'uses'=>'CategoriesController@edit' ,
	'as'=> 'category.edit'

]);

Route::get('/category/delete/{id}',[

	'uses'=>'CategoriesController@destroy' ,
	'as'=> 'category.delete'

]);

Route::post('/category/update/{id}',[

	'uses'=>'CategoriesController@update' ,
	'as'=> 'category.update'

]);

Route::get('/tags',[

	'uses'=> 'TagsController@index' ,
	'as'=> 'tags'

]);

Route::get('/tag/edit/{id}',[

	'uses'=> 'TagsController@edit' ,
	'as'=> 'tag.edit'

]);

Route::get('/tag/create/',[

	'uses'=> 'TagsController@create' ,
	'as'=> 'tag.create'

]);

Route::post('/tag/store/',[

	'uses'=> 'TagsController@store' ,
	'as'=> 'tag.store'

]);


Route::post('/tag/update/{id}',[

	'uses'=> 'TagsController@update' ,
	'as'=> 'tag.update'

]);
Route::get('/tag/delete/{id}',[

	'uses'=> 'TagsController@destroy' ,
	'as'=> 'tag.delete'

]);

Route::get('/user',[

	'uses'=> 'UsersController@index' ,
	'as'=> 'users'

]);

Route::get('/user/create/',[

	'uses'=> 'UsersController@create' ,
	'as'=> 'user.create'

]);

Route::post('/user/store/',[

		'uses'=> 'UsersController@store' ,
		'as'=> 'user.store'

]);

Route::get('/user/admin/{id}',[

		'uses'=> 'UsersController@admin' ,
		'as' => 'user.admin'

]);

Route::get('/user/not-admin/{id}',[

		'uses'=> 'UsersController@not_admin' ,
		'as' => 'user.not.admin'

]);

Route::get('user/profile/',[
		'uses'=>'ProfilesController@index' ,
		'as'=>'user.profile'
]);

Route::post('/user/profile/update',[
		'uses'=> 'ProfilesController@update',
		'as'=> 'user.profile.update'
]);

Route::get('user/profile/delete/{id}',[
		'uses'=>'ProfilesController@destroy',
		'as'=> 'user.profile.delete'
]);

Route::get('/setting',[
		'uses' => 'SettingsController@index',
		'as'=> 'setting'
]);
Route::post('setting/update',[
		'uses' => 'SettingsController@update',
		'as'=> 'setting.update'
]);

});