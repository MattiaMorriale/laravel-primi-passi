<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    
    $hello = "Hello World!";
    
    return view('home', compact("hello"));
})->name('home');


Route::get('/pagina-2', function() {

    return view("secondaPagina");

})->name('seconda');

