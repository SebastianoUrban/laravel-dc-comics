<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Comics\ComicsController as ComicsController;
use App\Http\Controllers\HomeController as HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/comics', [ComicsController::class, 'index'])->name('comics.index');
// Route::get('/comics/create', [ComicsController::class, 'create'])->name('comics.create');
// Route::get('/comics/{id}', [ComicsController::class, 'show'])->name('comics.show');
// Route::post('/comics', [ComicsController::class, 'store'])->name('comics.store');
Route::resource('comics', ComicsController::class);