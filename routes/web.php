<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
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

// dessa forma pode-se utilizar vários middlewares no mesmo grupo
Route::middleware(['auth'])->group(function () {
    // middleware Auth - verificar se o usuário está ou não autenticado
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/task/new', [TaskController::class, 'create'])->name('task.create');
    Route::post('/task/create_action', [TaskController::class, 'create_action'])->name('task.create_action');
    Route::get('/task/edit', [TaskController::class, 'edit'])->name('task.edit');
    Route::post('/task/edit_action', [TaskController::class, 'edit_action'])->name('task.edit_action');
    Route::get('/task/delete', [TaskController::class, 'delete'])->name('task.delete');
    Route::get('/task', [TaskController::class, 'index'])->name('task.view');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/task/update', [TaskController::class, 'update'])->name('task.update');
});



// o laravel passa a rota login por padrão quando não está autenticado
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'login_action'])->name('user.login_action');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'register_action'])->name('user.register_action');
