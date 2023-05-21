<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

//Show all employee
Route::get('/', [EmployeeController::class, 'index']);

//Show Create Form
Route::get('/employee/add', [EmployeeController::class, 'create']);

//Store Employee...
Route::post('/employee/create', [EmployeeController::class, 'store']);

//Show Single Employee
Route::get('/employee/{employee}', [EmployeeController::class, 'show']);

//Show Edit Form
Route::get('/employee/{employee}/edit', [EmployeeController::class, 'edit']);

//Update Form...
Route::put('/employee/update', [EmployeeController::class, 'update']);

//Delete Employee...
Route::delete('/employee/delete', [EmployeeController::class, 'destroy']);

