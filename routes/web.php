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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/order', [App\Http\Controllers\OrderController::class, 'order'])->name('order');
Route::post('/package/1', [App\Http\Controllers\HomeController::class, 'one'])->name('home');
Route::post('/package/2', [App\Http\Controllers\HomeController::class, 'two'])->name('home');
Route::post('/package/3', [App\Http\Controllers\HomeController::class, 'three'])->name('home');
Route::post('/package/4', [App\Http\Controllers\HomeController::class, 'four'])->name('home');
Route::post('/package/5', [App\Http\Controllers\HomeController::class, 'five'])->name('home');
Route::post('/package/6', [App\Http\Controllers\HomeController::class, 'six'])->name('home');
Route::post('/package/7', [App\Http\Controllers\HomeController::class, 'seven'])->name('home');
Route::post('/package/8', [App\Http\Controllers\HomeController::class, 'eight'])->name('home');
Route::post('/package/9', [App\Http\Controllers\HomeController::class, 'nine'])->name('home');
Route::post('/package/10', [App\Http\Controllers\HomeController::class, 'ten'])->name('home');
Route::get('/ordered', [App\Http\Controllers\OrderController::class, 'orderedpackages'])->name('home');
Route::post('/update', [App\Http\Controllers\OrderController::class, 'update'])->name('home');
Route::post('/delete', [App\Http\Controllers\OrderController::class, 'delete'])->name('home');
Route::post('/deleteuser', [App\Http\Controllers\OrderController::class, 'deleteuser'])->name('home');
Route::get('/users', [App\Http\Controllers\HomeController::class, 'users'])->name('home');




