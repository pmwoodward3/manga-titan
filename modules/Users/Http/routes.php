<?php

Route::group(['prefix' => 'users', 'namespace' => 'Modules\Users\Http\Controllers'], function()
{
	Route::get('/', ['as' => 'user.redirect', 'uses' => 'UsersController@redirect']);

	Route::group(['middleware' => 'sentinel.guest'], function () {
		Route::get('login',		['uses' => 'UsersController@index',			'as' => 'user.login']);
		Route::get('register',	['uses' => 'UsersController@register',		'as' => 'user.register']);
		Route::post('register',	['uses' => 'UsersController@postRegister',	'as' => 'user.post.register']);
		Route::post('login',	['uses' => 'UsersController@postLogin',		'as' => 'user.post.login']);
	});

	Route::group(['middleware' => 'sentinel.auth'], function () {
		Route::get('logout',	['uses' => 'UsersController@logout',	'as' => 'user.logout']);
		Route::get('profile',	['uses' => 'UsersController@profile',	'as' => 'user.profile']);
		Route::get('security',	['uses' => 'UsersController@security',	'as' => 'user.security']);
		Route::get('manga',		['uses' => 'UsersController@manga',		'as' => 'user.manga']);
		Route::get('subscribe',	['uses'	=> 'UsersController@subscribe',	'as' => 'user.subscribe']);
		Route::get('payment',	['uses' => 'UsersController@payment',	'as' => 'user.payment']);
		Route::get('notify',	['uses' => 'UsersController@notify',	'as' => 'user.notify']);

		Route::post('security', ['uses' => 'UsersController@updatepass', 'as' => 'user.post.security']);
	});

});