<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

//Petición por get

Route::get('/', function () {
	return '¡Hola Mundo desde Laravel..!';
});

//Petición por post

Route::post('persona/nuevo', function(){
	return '¡Hola Mundo desde Laravel..!';
});

//Petición por put

Route::put('persona/nuevo', function () { 
	//
});

//Petición por delete

Route::delete('persona/borrar', function () {
});