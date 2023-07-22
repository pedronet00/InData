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
<<<<<<< HEAD

use App\Http\Controllers\EventController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;

Route::get('/', [EventController::class, 'index']);

Route::get('/events/create', [EventController::class, 'create']);

Route::get('/contacts/create', [ContactController::class, 'create']);

Route::get('/products/create', [ProductController::class, 'create']);

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
=======
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/projects/create', [ProjectController::class, 'create']);
Route::post('/projects', [ProjectController::class, 'store']);
Route::get('/projects/list', [ProjectController::class, 'index']); 

Route::get('/register', [UserController::class, 'register']);
Route::post('/user/register', [UserController::class, 'store']);
>>>>>>> ff977a00771accfd3f337933ac893d6ebe244ca5
