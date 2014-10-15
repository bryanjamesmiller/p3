<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});

// Display the form for generating users
Route::get('/users', function() {

    echo "users";

});

// Process form for generating users
Route::post('/users', function() {

    echo "users";

});

// Display the form for generating paragraphs
Route::get('/paragraphs', function() {

    echo "paragraphs";

});

// Process form for generating paragraphs
Route::post('/paragraphs', function() {

    echo "paragraphs";

});

// Tells you the environment you are on
Route::get('/practice', function() {
    echo App::environment();
});