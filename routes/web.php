<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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
    return view('welcome');
});

// Rute untuk menampilkan semua buku
Route::get('/books', [BookController::class, 'index'])->name('books.index');

// Rute untuk menampilkan form penambahan buku
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');

// Rute untuk menyimpan buku baru
Route::post('/books', [BookController::class, 'store'])->name('books.store');

// Rute untuk menampilkan detail buku
Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');

// Rute untuk menampilkan form edit buku
Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');

// Rute untuk menyimpan perubahan pada buku yang diedit
Route::put('/books/{book}', [BookController::class, 'update'])->name('books.update');

// Rute untuk menghapus buku
Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy');

