<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});



/*Route::get('/crear', function (){
    return "Crear";
});

Route::get('/update', function () {
    return "Actualizar";
});

Route::get('/delete', function () {
    return "Eliminar";
});

Route::get('/post/{id}/{nombre}', function ($id,$nombre) {
    return "Este es el post numero " . $id . " por " . $nombre;
    mandar parametros (?)
})->where('nombre','[a-zA-Z]+');
*/