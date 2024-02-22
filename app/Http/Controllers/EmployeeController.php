<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    // All Employees
    public function index(){
        return view('employees.index', [
            'employees' => Employee::latest()->filter
                (request(['search']))->get()
        ]);
    }

    // Single Employee
    public function show(Employee $id){
        return view('employees.show', ['employee' => $id]);
    }

}
