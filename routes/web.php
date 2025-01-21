<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//ルートリソースで一括処理
Route::resource('tasks', TaskController::class);
// ルートリソースを使用しない場合
// Route::get('/tasks', [TaskController::class, 'index']);
// Route::get('/tasks/create', [TaskController::class, 'create']);
// Route::post('/tasks', [TaskController::class, 'store']);
// Route::get('/tasks/{task}', [TaskController::class, 'show']);
// Route::get('/tasks/{task}/edit', [TaskController::class, 'edit']);
// Route::patch('/tasks/{task}', [TaskController::class, 'update']);
// Route::delete('/tasks/{task}', [TaskController::class, 'destroy']);
