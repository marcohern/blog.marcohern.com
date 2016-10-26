<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(
	[
		'prefix' => LaravelLocalization::setLocale(),
		'middleware' => [ 'localeSessionRedirect', 'localizationRedirect' ]
	], function() {
		
		Route::get('/', 'HomeController@index');

		Route::get('/', 'HomeController@about');
		
		Route::get('/', 'HomeController@contact');

		Route::get('/post/{post}', 'HomeController@post');

		Route::get('test',function(){
			return 'This is a test';
		});
	}
);


Route::get('/image/{density}/{profile}/{name}', 'ImagesController@display');
/*
Route::get('/test', function() {
	return view('sample');
});

Route::get('/test/redirect', function() {
	return Redirect::to('/test/named');
});

Route::get('/test/named', ['as' => 'named', function() {
	$named = URL::route('named');
	return 'TEST route named: '.$named;
}]);

Route::get('/test/{variable}', function($variable) {
	return 'TEST route v1 '.$variable;
});

Route::get('/test/{var1}/{var2}', function($var1, $var2) {
	return 'TEST route v2 '.$var1.'/'.$var2;
});*/