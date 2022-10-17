<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\AutoCompleteController;

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

Route::get('add', function () {
    return view('add_books');
});

// Route::get('index', function () {
//     return view('index');
// });


Route::get('view', function () {
    return view('view_books');
});

Route::get('/index', [BooksController::class, 'index']);

Route::post('/req', [BooksController::class, 'store'])->name('req');

Route::get('/delete/{id}', [BooksController::class, 'destroy'])->name('delete');




Route::get('update/{id}', [BooksController::class, 'update'])->name('up');
Route::put('/put/{id}', [BooksController::class, 'updateBook'])->name('put');
Route::post('/findBook', [BooksController::class, 'findBook'])->name('Find');

// Route::post('/update_books', [BooksController::class, 'update'])->name('update_books');
Route::get('search', [AutoCompleteController::class, 'index'])->name('search');
Route::get('trash', [BooksController::class, 'soft'])->name('trash');
Route::get('restore/{id}', [BooksController::class, 'restore'])->name('restore');
Route::get('fdelete/{id}', [BooksController::class, 'fdelete'])->name('fdelete');
Route::get('sortUp', [BooksController::class, 'sortUp']);
Route::get('sortDown', [BooksController::class, 'sortDown']);
