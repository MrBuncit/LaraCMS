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

    Route::get('profile', [App\Http\Controllers\SettingsController::class, 'profile'])->name('profile');

    Route::get('editprofile', [App\Http\Controllers\SettingsController::class, 'editProfile'])->name('editprofile');
    Route::post('updateprofile', [App\Http\Controllers\SettingsController::class, 'updateProfile'])->name('updateprofile');



    Route::get('/staffs', [App\Http\Controllers\StaffsController::class, 'index'])->name('staffs');

});

Route::get('editpassword', [App\Http\Controllers\SettingsController::class, 'editPassword'])->name('editpassword');
    Route::post('updatepassword', [App\Http\Controllers\SettingsController::class, 'updatePassword'])->name('updatepassword');




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

Route::get('auth/verify/{token}', 'App\Http\Controllers\Auth\RegisterController@verify');

