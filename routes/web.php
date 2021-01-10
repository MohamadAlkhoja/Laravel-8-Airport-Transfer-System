<?php

use App\Http\Controllers\HomeeController;
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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/', [HomeeController::class, 'index']);

Route::get('/admin', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home')->middleware('auth');

Route::get('/admin/login', [HomeeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout', [HomeeController::class, 'logout'])->name('admin_logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
