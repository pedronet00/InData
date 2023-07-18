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

    $nome = "Pedro";
    $idade = 29;

    return view('welcome', ['nome' => $nome, 'idade' => $idade]);
});

Route::get('/teste', function(){
    return view('teste');
});
