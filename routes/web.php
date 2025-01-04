<?php




use Illuminate\Support\Facades\Route;
use OliverCharlesLowe\Permission\Src\Livewire\Counter;
use OliverCharlesLowe\Permission\Http\Controllers\TaskController;
use Livewire\Livewire;





Route::resource('tasks', TaskController::class);
