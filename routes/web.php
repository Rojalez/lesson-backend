<?php

use App\Http\Controllers\AdminControllers\LessonController;
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

Route::get('/lessons', [LessonController::class, 'index'])->middleware(['auth'])->name('lessons.index');
Route::get('/lesson/create', [LessonController::class, 'create'])->middleware(['auth'])->name('lessons.create');
Route::post('/lesson/post', [LessonController::class, 'store'])->middleware(['auth'])->name('lessons.store');
Route::get('/lesson/{id}/edit', [LessonController::class, 'edit'])->middleware(['auth'])->name('lessons.edit');
Route::put('/lessons/{id}', [LessonController::class, 'update'])->middleware(['auth'])->name('lessons.update');
Route::delete('/lesson/{id}', [LessonController::class, 'delete'])->middleware(['auth'])->name('lessons.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
