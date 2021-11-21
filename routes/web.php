<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorsController;



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
    return view('auth.login');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('/books', [App\Http\Controllers\BooksController::class, 'index'])->name('books');
    Route::get('/authors', [App\Http\Controllers\AuthorsController::class, 'index'])->name('authors');
    Route::get('/staffs', [App\Http\Controllers\StaffsController::class, 'index'])->name('staffs');
});
