<?php

use App\Http\Controllers\EmployeeController;
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

// All Employees
Route::get('/', [EmployeeController::class,'index']);

// Show create form
Route::get('/employees/create', [EmployeeController::class,'create']);

// Store New Employee Data
Route::post('/employees', [EmployeeController::class,'store']);

// Single Employee
Route::get('/employees/{id}', [EmployeeController::class,'show']);
