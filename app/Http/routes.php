<?php

	Route::group(['prefix' => 'api'], function () {
		Route::post('login','LoginController@login');
	});
