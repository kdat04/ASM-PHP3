<?php

use App\Http\Controllers\CategoryesController;
use App\Http\Controllers\ViewController;
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
Route::get('/', [ViewController::class, 'index'])->name('home');
Route::get('/trangdm/{category}', [ViewController::class, 'trangdm'])->name('trangdm');;
Route::get('/chitiettin/{post}', [ViewController::class, 'chitiettin'])->name('chitiettin');;
Route::post('/search', [ViewController::class, 'search'])->name('search');;

// admin
Route::get('/admin', [ViewController::class, 'admin'])->name('admin');;



