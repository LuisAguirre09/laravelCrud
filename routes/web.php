<?php

use Illuminate\Support\Facades\Route;


/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','crudController@index');
Route::get('/create','crudController@create');
Route::get('/update','crudController@update');
Route::get('/delete','crudController@delete');
Route::get('/show','crudController@show');

Route::get('/reed', function(){
    $products=App\Product::all();

    foreach ($products as $product) {
        echo $product->nameProduct . "<br>";
    }
});