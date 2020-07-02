<?php

use Illuminate\Support\Facades\Route;

//Forma más simpificado
//Route::view('/', 'home' , ['nombre' => 'Michael'])->name("home");
//La forma simplificado en general se usa en pantallas fijas y sin lógicas, como bases y condiciones, politica de privasidad, etc.

/*
Route::get('/', function () {
    $nombre = "Mike";
    //Forma de Nombre y Variable
    //return view('home')->with('nombre', $nombre);
    
    //Forma de Array 1
    //return view('home')->with(['nombre' => $nombre]);
    
    //Forma de Array 2
    //return view('home', ['nombre' => $nombre]);
    
    //Forma simple Nombre y Variable por igual
    return view('home', compact('nombre'));
    
    //return view('home');
})->name("home");
*/

//sin parametro
Route::get('ejemplo', function () {
    return "Este es un ejemplo";
});

//pasaje de parametro
Route::get('saludo/{nombre?}', function ($nombre = "Invitado") {
    return "Saludo a ". $nombre;
});

//Rutas con referencias / Rutas con nomres
Route::get('sobrenosotros', function () {
    return "Contactos haciendo referencia a sobre nosotros.";
})->name('contactos');

/////Suponemos que tenemos 4 vistas para mostrar


Route::view('/', 'home')->name("home");
Route::view('/abaut', 'abaut')->name("abaut");
Route::get('/portafolio', 'portafoliocontroller@index')->name("portafolio");
Route::view('/contact', 'contact')->name("contact");
Route::post('/contact', 'MessagesController@store');


//->only(['index', 'show']);
//->except(['index', 'show']);

//Route::resource('projects', 'portafoliocontroller');