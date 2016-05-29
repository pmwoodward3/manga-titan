<?php

Route::group(['prefix' => 'admin', 'namespace' => 'Modules\Admin\Http\Controllers', 'middleware' => 'sentinel.admin', 'as' => 'admin.'], function()
{
	Route::get('/', ['uses' => 'AdminController@index', 'as' => 'home']);

	Route::group(['prefix' => 'manga'], function () {
		Route::get('/', ['uses' => 'MangaController@index', 'as' => 'manga']);
		Route::get('create', ['uses' => 'MangaController@create', 'as' => 'manga.create']);
		Route::get('detail/{manga_id}', ['uses' => 'MangaController@detail', 'as' => 'manga.detail']);
	});

	Route::group(['prefix' => 'chapter'], function () {
		Route::get('{manga_id}/create', ['uses' => 'ChapterController@create', 'as' => 'chapter.create']);\
		Route::get('{manga_id}/edit/{chapter_id}', ['uses' => 'ChapterController@edit', 'as' => 'chapter.edit']);
	});
	
	Route::get('page/{id_manga}', ['uses' => 'AdminController@page', 'as' => 'page']);
	Route::get('tag', ['uses' => 'AdminController@tag', 'as' => 'tag']);
	Route::get('category', ['uses' => 'AdminController@category', 'as' => 'category']);
	Route::get('comment', ['uses' => 'AdminController@comment', 'as' => 'comment']);
	Route::get('user', ['uses' => 'AdminController@user', 'as' => 'user']);
});