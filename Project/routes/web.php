<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\LibraryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('courses', CourseController::class);

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/courses/{course}/buy', [TransactionController::class, 'create'])->name('transactions.create');
Route::post('/courses/{course}/buy', [TransactionController::class, 'store'])->name('transactions.store');

Route::get('/library', [LibraryController::class, 'index'])->name('library');

Route::get('/courses/{id_course}/buy', [CourseController::class, 'buy'])->name('courses.buy');
Route::post('/courses/{id_course}/purchase', [CourseController::class, 'purchase'])->name('courses.purchase');

require __DIR__.'/auth.php';