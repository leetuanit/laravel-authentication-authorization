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
Auth::routes();
Route::redirect('/home','/',301);
Route::get('', 'HomeController@index')->name('home');

Route::get('board','DashboardController@show')->name('dashboard');

Route::group(['prefix'=>'board','middleware' => 'auth'],function(){
	Route::get('overview','OverviewController@show')->name('dashboard.overview');
	Route::get('projects','ProjectController@show')->name('dashboard.projects');
	Route::get('investors','InvestorController@show')->name('dashboard.investors');
	Route::get('partners','PartnerController@show')->name('dashboard.partners');
	Route::get('posts','PostController@show')->name('dashboard.posts');
	Route::get('pages','PageController@show')->name('dashboard.pages');
	Route::get('comments','CommentController@show')->name('dashboard.comments');
	Route::get('profile','ProfileController@show')->name('dashboard.profile');
	Route::get('users','UserController@show')->name('dashboard.users');
	Route::get('settings','SettingController@show')->name('dashboard.settings');
	Route::post('profile','ProfileController@update');
	Route::post('settings','SettingController@update');
});