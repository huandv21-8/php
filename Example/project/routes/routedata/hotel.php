<?php
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/hotel'], function () {
		Route::get('/view', 'HotelController@showAll')->name('showAll');

		Route::get('/detail', 'HotelController@showDetail')->name('showDetail');
	});