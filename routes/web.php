<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\BookController as AdminBookController;
use App\Http\Controllers\guest\BookController as GuestBookController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(
    function () {
        //add routes trashed and force-deletes
        Route::get('trashed', [AdminBookController::class, 'trashed'])->name('books.trashed');
        Route::delete('books/force-delete/{id}', [AdminBookController::class, 'forceDelete'])->name('books.forceDelete');
        Route::get('books/restore/{id}', [AdminBookController::class, 'restoreDeleted'])->name('books.restore');
        Route::post('books/restore-all', [AdminBookController::class, 'restoreAll'])->name('restore-all');
        Route::delete('books/delete-all', [AdminBookController::class, 'deleteAll'])->name('delete-all');
        Route::resource('/books', AdminBookController::class);
    }
);

Route::resource('/guest/books', GuestBookController::class);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
