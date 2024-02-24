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
    public function show(Employee $employee){
        return view('employees.show', ['employee' => $employee]);
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
            'email' => ['required', Rule::unique('employees','email')],
            'birthday' => 'required',
            'employeePhoto' => 'required',
            'jobPosition' => 'required',
            'dateHired' => 'required',
            'addressCity' => 'required',
            'addressProvince' => 'required',
            'addressCountry' => 'required'
        ]);
        if($request->hasFile('employeePhoto')) {

            // change filename of image, save to Cloudinary Object Storage, and add path to record
            $imageFilename = time().'-'.$request['firstname'].'-'.$request['lastname'];
            $savedImage = $request['employeePhoto']->storeOnCloudinaryAs('fusebax/employeeImages', $imageFilename);
            $formFields['employeeImagePath'] = $savedImage->getSecurePath();
        
        }

        //Add New Record
        Employee::create($formFields);

        return redirect('/')->with('message', 'New employee added successfully!');
    }

    // Show Edit Form
    public function edit(Employee $employee) {
        return view('employees.edit', ['employee' => $employee]);
    }

    // Update Employee Data
    public function update(Request $request, Employee $employee){
        $formFields = $request->validate([
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'mobileNumber' => 'required',
            'email' => 'required',
            'birthday' => 'required',
            'jobPosition' => 'required',
            'dateHired' => 'required',
            'addressCity' => 'required',
            'addressProvince' => 'required',
            'addressCountry' => 'required'
        ]);
        if($request->hasFile('employeePhoto')) {

            // change filename of image, save to Cloudinary Object Storage, and add path to record
            $imageFilename = time().'-'.$request['firstname'].'-'.$request['lastname'];
            $savedImage = $request['employeePhoto']->storeOnCloudinaryAs('fusebax/employeeImages', $imageFilename);
            $formFields['employeeImagePath'] = $savedImage->getSecurePath();
        
        }

        //Add New Record
        $employee->update($formFields);

        return back()->with('message', 'Employee update successfully!');
    }

    // Delete Employee Data
    public function destroy(Employee $employee) {
        $employee->delete();
        return redirect('/')->with('message', 'Employee data deleted!');

    }
    
}
