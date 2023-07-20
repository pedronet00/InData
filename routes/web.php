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
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/movies/create', [MovieController::class, 'create']);
Route::post('/movies', [MovieController::class, 'store']);
Route::get('/movies/list', [MovieController::class, 'index']); 

Route::get('/register', [UserController::class, 'register']);
Route::post('/user/register', [UserController::class, 'store']);
