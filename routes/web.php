<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('auth/login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Route::get('/usuarios/create', [UserController::class, 'create'])->middleware(['auth'])->name('usuarios.create');
// Route::get('/usuarios/{usuario}/edit', [UserController::class, 'edit'])->middleware(['auth'])->name('usuarios.edit');
// Route::get('/usuarios/lista', [UserController::class, 'lista'])->middleware(['auth'])->name('usuarios.lista');
