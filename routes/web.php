<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\EmployeeTaskController;
use App\Http\Controllers\DependentController;

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

Route::resource('departments', DepartmentController::class);
Route::resource('employees', EmployeeController::class);
Route::resource('projects', ProjectController::class);
Route::resource('tasks', TaskController::class);
Route::get('projects/{projectId}/create-task', [TaskController::class, 'create']);
Route::get('projects/{projectId}/task/{id}', [TaskController::class, 'show']);
Route::get('projects/{projectId}/task/{id}/edit', [TaskController::class, 'edit']);
Route::resource('addEmployee', EmployeeTaskController::class);
Route::resource('dependents', DependentController::class);
