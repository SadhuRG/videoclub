<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

//Petición por get

/*
Route::get('/', function () {
	return '¡Hola Mundo desde Laravel..!';
});
*/

//Petición por post

/*
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


Route::match(array('GET' , 'POST'), '/', function(){
    return '!Hola Mundo desde laravel...!';
}); 


route::get('persona/{nombre?}', function($nombre = null){
	return $nombre;
});

*/



Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('auth.login');
});


Route::get('/catalog', function () {
    return view('catalog.index');
});

Route::get('/catalog/show/{id}', function ($id) {
    return view('catalog.show', ['id' => $id]);
});

Route::get('/catalog/create', function () {
    return view('catalog.create');
});

Route::get('/catalog/edit/{id}', function ($id) {
    return view('catalog.edit', ['id' => $id]);
});



