<?php

Route::get('/', 'InvoicesController@index'); 
Route::get('/genres', 'GenresController@index'); 
Route::get('/tracks', 'TracksController@index'); 
Route::get('/tracks?genre={genre->Name}', 'controller@method');

// Route -> Controller -> load view 
//Route::get('/', function () {
//	return view('invoices');
//}); 