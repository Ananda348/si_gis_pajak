<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PajakController;

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

Route::get('/', [App\Http\Controllers\WebController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Kategori
Route::get('/kategori', [App\Http\Controllers\KategoriController::class, 'index'])->name('kategori');
Route::get('/kategori/add', [App\Http\Controllers\KategoriController::class, 'add']);
Route::post('/kategori/insert', [App\Http\Controllers\KategoriController::class, 'insert']);

//Aset Pajak
Route::get('/pajak', [App\Http\Controllers\PajakController::class, 'index'])->name('pajak');