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


Route::get('/servicios', function () {
    return view('servicios.create');
});

Route::get('/servicios/edit/{id}', function ($id) {
    return view('servicios.edit', ['id' => $id]);
});

Route::get('/servicios/index/{id}', function ($id) {
    return view('servicios.index', ['id' => $id]);
});

Route::get('/servicios/show/{id}', function ($id) {
    return view('servicios.show', ['id' => $id]);
});

Route::get('/servicios/edit/{id}', function ($id) {
    return view('servicios.edit', ['id' => $id]);
});

Route::get('/blog', function () {
    return view('blog.create');
});

Route::get('/proyectos', function () {
    return view('proyectos.create');
});

Route::get('/clientes', function () {
    return view('clientes.create');
});

Route::get('/contacto', function () {
    return view('contacto.create');
});



