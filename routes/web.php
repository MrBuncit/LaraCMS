<?php

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


Route::get('/', 'App\Http\Controllers\GuestController@index');

Route::get('/auth', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::resource('authors', 'App\Http\Controllers\AuthorsController');
    Route::resource('books', 'App\Http\Controllers\booksController');
    Route::get('/staffs', [App\Http\Controllers\StaffsController::class, 'index'])->name('staffs');
});

Route::get('books/{book}/borrow', [
'middleware' => ['auth', 'role:member'],
'as' => 'guest.books.borrow',
'uses' => 'App\Http\Controllers\BooksController@borrow'
]);

Route::put('books/{book}/return', [
    'middleware' => ['auth', 'role:member'],
    'as' => 'member.books.return',
    'uses' => 'App\Http\Controllers\BooksController@returnBack'
]);

