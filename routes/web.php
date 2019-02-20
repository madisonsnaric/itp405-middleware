<?php

Route::get('/login', 'LoginController@index'); 
Route::post('/login', 'LoginController@login'); 
Route::get('/logout', 'LoginController@logout'); 

Route::middleware(['authenticated'])->group(function() {
	Route::get('/profile', 'AdminController@index'); 
	Route::get('/invoices', 'InvoicesController@index'); 
	Route::get('/settings', 'SettingsController@index'); 
}); 


// Route::middleware(['MaintenaceMode'])->group(function() {
	Route::get('/genres', 'GenresController@index'); 
	Route::get('/tracks', 'TracksController@index'); 
	Route::get('/tracks?genre={genre->Name}', 'controller@method');
	Route::get('/', 'PlaylistController@index'); 
	Route::get('/playlists/new', 'PlaylistController@create');  
	Route::get('/playlists/{id}', 'PlaylistController@index');
	Route::post('/playlists', 'PlaylistController@store'); 

	Route::get('/signup', 'SignUpController@index');
	Route::post('/signup', 'SignUpController@signup');  

	Route::get('/maintenace', 'MaintenanceController@index'); 
// }); 




// Route -> Controller -> load view 
//Route::get('/', function () {
//	return view('invoices');
//}); 