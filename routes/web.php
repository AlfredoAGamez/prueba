<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/contacto', function() {
    return "hola desde contacto";
});


Route::get('/', function () {
     echo "<a href='contacto'>contacto 1</a><br>";
     echo "<a href='contacto'>contacto 2</a><br>";
     echo "<a href='contacto'>contacto 3</a><br>";
     echo "<a href='contacto'>contacto 4</a><br>";
     echo "<a href='contacto'>contacto 5</a><br>";
});


