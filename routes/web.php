<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Auth;
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
Route::prefix('client')
    ->name('client.')
    ->group(function () {
        Route::get('/',                  [ViewController::class, 'index'])->name('home');
        Route::get('trangdm/{category}', [ViewController::class, 'trangdm'])->name('trangdm');
        Route::get('chitiettin/{post}',  [ViewController::class, 'chitiettin'])->name('chitiettin');;
        Route::post('search',            [ViewController::class, 'search'])->name('search');

    });


// admin
Route::prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/',           [ViewController::class, 'home'])->name('home');
        // Categorys
        Route::resource('categories', CategoryController::class);

        // Posts
        Route::resource('posts', PostController::class);

    });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
