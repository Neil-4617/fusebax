<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Employee;

class EmployeeController extends Controller
{
    // All Employees
    public function index(){
        return view('employees.index', [
            'employees' => Employee::latest()->filter
                (request(['search']))->paginate(5)
        ]);
    }

    // Single Employee
    public function show(Employee $id){
        return view('employees.show', ['employee' => $id]);
    }
    
    // Show Create Form
    public function create(){
        return view('employees.create');
    }
    
    // Store New Employee Data
    public function store(Request $request){
        
        $formFields = $request->validate([
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'mobileNumber' => 'required',
            'email' => ['required', 'email'],
            'birthday' => 'required',
            'jobPosition' => 'required',
            'dateHired' => 'required',
            'addressCity' => 'required',
            'addressProvince' => 'required',
            'addressCountry' => 'required'
        ]);
        
        //Add New Record
        Employee::create($formFields);

        return redirect('/')->with('message', 'New Employee Added Successfully');
    }
    
}
