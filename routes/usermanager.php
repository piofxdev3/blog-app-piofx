<?php

use App\Http\Controllers\UserManagement\UserManagerController;

Route::get('user', [UserManagerController::class, 'index'])->name('UserManager.index');
Route::get('user/create', [UserManagerController::class, 'create'])->name('UserManager.create');
Route::post('user/create', [UserManagerController::class, 'store'])->name('UserManager.store');
Route::get('user/{id}/edit', [UserManagerController::class, 'edit'])->name('UserManager.edit');
Route::put('user/{id}', [UserManagerController::class, 'update'])->name('UserManager.update');
Route::delete('user/delete/{id}', [UserManagerController::class, 'destroy'])->name('UserManager.destroy');
Route::get('user/{username}', [UserManagerController::class, 'show'])->name('UserManager.show');

