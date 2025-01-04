<?php



use OliverCharlesLowe\Permission\Http\Controllers\RoleController;
use OliverCharlesLowe\Permission\Http\Controllers\PermissionController;
use Illuminate\Support\Facades\Route;
use Olive\Permission\Src\Livewire\Counter;
use Olive\Permission\Http\Controllers\TaskController;
use Livewire\Livewire;



Route::middleware('spatie-permission')->group(function () {
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
});

Route::resource('tasks', TaskController::class);
