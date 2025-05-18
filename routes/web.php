<?php

use App\Http\Controllers\TodolistController;
use Illuminate\Support\Facades\Route;
 
Route::get('/', [TodolistController::class, 'todolist'])->name('todolist.index');


Route::get('/todolist/tambah', [TodolistController::class, 'create'])->name('todolist.create');
Route::post('/todolist/tambah/data', [TodolistController::class, 'store'])->name('todolist.store');

// Route::put('/todolist/update', [TodolistController::class, 'update'])->name('todolist.update');

// Route::get('/profile', function () {
//     return view('profile');
// });

Route::get('/todolist/{task}', [TodolistController::class, 'show'])->name('todolist.show');
Route::get('/todolist/{task}/edit', [TodolistController::class, 'edit'])->name('todolist.edit');
Route::put('/todolist/{task}', [TodolistController::class, 'update'])->name('todolist.update');
Route::delete('/todolist/{task}', [TodolistController::class, 'destroy'])->name('todolist.destroy');
