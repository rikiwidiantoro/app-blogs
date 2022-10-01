<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/artikel', [App\Http\Controllers\ArticleController::class, 'index']);
// Route::get('/kategori', [App\Http\Controllers\CategoryController::class, 'index']);

Route::middleware(['auth'])->group(function() {
    Route::get('/artikel', [App\Http\Controllers\ArticleController::class, 'index']);
    Route::get('/artikel/create', [App\Http\Controllers\ArticleController::class, 'create']);
    Route::post('/artikel/store', [ArticleController::class, 'store']);
    Route::get('/artikel/{id}/edit', [ArticleController::class, 'edit']);
    Route::put('/artikel/{id}', [ArticleController::class, 'update']);
    Route::delete('/artikel/{id}', [ArticleController::class, 'destroy']);


    Route::get('/kategori', [App\Http\Controllers\CategoryController::class, 'index']);
    Route::get('/kategori/create', [App\Http\Controllers\CategoryController::class, 'create']);
    Route::post('/kategori/store', [CategoryController::class, 'store']);
    Route::get('/kategori/{id}/edit', [CategoryController::class, 'edit']);
    Route::put('/kategori/{id}', [CategoryController::class, 'update']);
    Route::delete('/kategori/{id}', [CategoryController::class, 'destroy']);
});