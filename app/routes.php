<?php

/*
|	Unauthenticated group
*/


Route::group(array('before' => 'guest'), function() {

	/*
	|	CSRF Protection Group	
	*/
	Route::group(array('before' => 'csrf'), function(){

	});

	Route::get('/', function() {

		return View::make('hello');
		
	});

	

	
});


/*
|	Authenticated Group
*/
Route::group(array('before' => 'auth'), function(){

	

});


