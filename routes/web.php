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
    $arr = [1,2,3,4];
    $nomes = ["Pedro", "Maria", "Bia", "Lucas"];

    return view('welcome', 
        [
            'nome' => $nome, 
            'idade' => $idade,
            'arr' => $arr,
            'nomes' => $nomes
        ]);
    });

Route::get('/teste', function(){
    return view('teste');
});

Route::get('produtos/{id?}', function ($id = null) {
    return view('product', ['id'=> $id]);
});

Route::get('produtos_teste', function ($id = null) {

    $busca = request('search');

    return view('product', ['busca' => $busca]);
});
