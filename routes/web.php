<?php

use App\Http\Controllers\AppController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AppController::class, 'index']);

Route::get('registerPage', [AppController::class, 'registerPage'])->name('reg_page');
Route::get('loginPage', [AppController::class, 'loginPage'])->name('log_page');
Route::get('dashboard', [AppController::class, 'dashboard'])->name('dashPage');
Route::get('maindash', [AppController::class, 'maindash'])->name('stud');

// Functions
Route::post('login', [AppController::class, 'login'])->name('log');
Route::get('/logout', [AppController::class, 'logout']);
Route::post('register_user', [AppController::class, 'register_user'])->name('reg');
Route::post('create_info', [AppController::class, 'create_info'])->name('create');
