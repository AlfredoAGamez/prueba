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


$portafolio =[
           ['title' => 'proyecto #1'],
           ['title' => 'proyecto #2'],
           ['title' => 'proyecto #3'],
           ['title' => 'proyecto #4'],
];


Route::view('/home', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/portafolio', 'portafolio', compact('portafolio'))->name('portafolio');
Route::view('/contact', 'contact')->name('contact');


/*Route::get('/', function () {

    $nombre= "Jorge";
    
    return view('home', compact('nombre'));

})->name('home');

*/
