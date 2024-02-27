<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
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
Route::get('/', [EmployeeController::class,'index'])->middleware('auth');

// Show create form
Route::get('/employees/create', [EmployeeController::class,'create'])->middleware('auth');

// Store New Employee Data
Route::post('/employees', [EmployeeController::class,'store'])->middleware('auth');

// Show edit form
Route::get('/employees/{employee}/edit', [EmployeeController::class,'edit'])->middleware('auth');

// Update Employee
Route::put('/employees/{employee}', [EmployeeController::class,'update'])->middleware('auth');

// Delete Employee
Route::delete('/employees/{employee}', [EmployeeController::class,'destroy'])->middleware('auth');

// Single Employee
Route::get('/employees/{employee}', [EmployeeController::class,'show']);


// Show User Register Form
Route::get('/home' , [UserController::class, 'index'])->middleware('guest');

// Show User Register Form
Route::get('/register' , [UserController::class, 'create'])->middleware('guest');

// Create New User
Route::post('/users', [UserController::class, 'store'])->middleware('auth');

// Logout User
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login' , [UserController::class, 'login'])->name('login')->middleware('guest');

// Login User
Route::post('users/authenticate', [UserController::class, 'authenticate']);

