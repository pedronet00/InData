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
use App\Http\Controllers\NotesController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CalendarioController;




//se o user for autenticado
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {


    Route::get('/', [ProjectController::class, 'welcome']); // Rota para chamar o método "welcome" do ProjectController
    Route::get('/projects/create', [ProjectController::class, 'create']);
    Route::post('/projects', [ProjectController::class, 'store']);
    Route::delete('/projects/{id}', [ProjectController::class, 'destroy']);
    Route::get('/projects/list', [ProjectController::class, 'index']); 
    Route::get('/projects/{id}', [ProjectController::class, 'show']); 

    Route::get('/user/list', [UserController::class, 'index']);
    Route::get('/user/register', function () {
        return view('auth.register');
    });
    Route::post('/user', [UserController::class, 'store']);

    Route::get('/notes/create', [NotesController::class, 'create']);
    Route::post('/notes', [NotesController::class, 'store']);
    Route::get('/notes/list', [NotesController::class, 'index']);

    Route::get('/calendario', [CalendarioController::class, 'index']);



});
