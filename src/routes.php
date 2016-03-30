<?php

Route::group(array('prefix' => Config::get('laraedit.uri')), function()
{
	
	Route::get('/', array(
		'as' => 'laraedit_home',
		'uses' => 'LaraEdit\Controllers\LaraEditController@getDashboard'
	));

	Route::post('/save', array(
		'as' => 'laraedit_save',
		'uses' => 'LaraEdit\Controllers\LaraEditController@postSave'
	));

	Route::post('/terminal', array(
		'as' => 'laraedit_terminal',
		'uses' => 'LaraEdit\Controllers\LaraEditController@postTerminal'
	));

});