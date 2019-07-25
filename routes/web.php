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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', 'PagesController@contact');
Route::post('/contact','PagesController@store');
Route::get('/tickets', 'PagesController@index');
Route::get('/ticket/{slug?}', 'PagesController@show');
Route::get('/ticket/{slug?}/edit', 'PagesController@edit');
Route::post('/ticket/{slug?}/edit', 'PagesController@update');
Route::post('/ticket/{slug?}/delete', 'PagesController@delete');

Route::get('sendemail', function () {
$data = array( 'name' => "Learning Laravel", );
Mail::send('emails.welcome', $data, function ($message) {
$message->from('ukuejubolakelvin@gmail.com', 'Learning Laravel');
$message->to('ukuejubolakelvin@gmail.com')->subject('Learning Laravel test email');
});
return "Your email has been sent successfully";
});
// public function comments()
// {
//   return $this->morphTo('App\Comment', 'post_id');
// }
// }

Route::post('/comment', 'CommentsController@newComment');

Auth::routes();
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::group(array('prefix' => 'admin', 'namespace' =>'Admin', 'middleware' => 'manager'), function(){
  // Route::get('/users', 'UsersController@index');
  Route::get('users', [ 'as' => 'admin.user.index', 'uses' => 'UsersController@index']);
  Route::get('/', 'PagesController@home');
  Route::get('roles', 'RolesController@index');
  Route::get('roles/create', 'RolesController@create');
  Route::post('roles/create', 'RolesController@store');
  Route::get('users/{id?}/edit', 'UsersController@edit');
  Route::post('users/{id?}/edit', 'UsersController@update');

  Route::get('posts', 'PostsController@index');
  Route::get('posts/create', 'PostsController@create');
  Route::post('posts/create', 'PostsController@store');
  Route::get('posts/{id?}/edit', 'PostsController@edit');
  Route::post('posts/{id?}/edit','PostsController@update');

  Route::get('categories', 'CategoriesController@index');
  Route::get('categories/create', 'CategoriesController@create');
  Route::post('categories/create', 'CategoriesController@store');

});

Route::get('/blog', 'BigController@index');
Route::get('/blog/{slug?}', 'BigController@show');
