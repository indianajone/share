<?php

	Route::group(array('prefix' => 'api/v1'), function() {
		Route::get('share', function(){
			return Response::fields('roles');
		});
	});