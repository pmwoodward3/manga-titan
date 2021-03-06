<?php

Route::group(['prefix' => 'manga', 'namespace' => 'Modules\Manga\Http\Controllers'], function()
{
	Route::group(['middleware' => 'sentinel.auth'], function () {
		Route::get('/', ['as' => 'manga.home', 'uses' => 'MangaController@index']);
		Route::get('artist/{artist?}', ['as' => 'manga.artist', 'uses' => 'MangaController@artist']);
		Route::get('category', ['as' => 'manga.category', 'uses' => 'MangaController@category']);
		Route::get('tags', ['as' => 'manga.tags', 'uses' => 'MangaController@tags']);
		Route::get('newest', ['as' => 'manga.newest', 'uses' => 'MangaController@newest']);
		Route::get('favorite', ['as' => 'manga.favorite', 'uses' => 'MangaController@favorite']);
		Route::get('desc/{id}', ['as' => 'manga.desc', 'uses' => 'MangaController@desc']);
		Route::get('read/{id}/{page?}', ['as' => 'manga.read', 'uses' => 'MangaController@read']);
	});
	Route::group(['middleware' => 'sentinel.admin'], function () {
		Route::post('upload/image',	['as' => 'image.upload', 'uses' => 'ImageController@upload']);
		Route::post('ajax', ['as' => 'manga.ajax', 'uses' => 'AjaxController@processor']);
	});
});