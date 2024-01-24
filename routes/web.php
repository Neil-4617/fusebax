<?php

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

Route::get('/', function () {
    return view('dashboard', ['dummyData' => [
        [
            'id' => 20230030,
            'firstname' => 'John',
            'middlename' => 'Ngueyen',
            'lastname' => 'Doe',
            'jobPosition' => 'Driver',
            'mobileNumber' => 9624100206,
            'sss' => 1111111111,
            'pagibig' => 2222222222,
            'philHealth' => 3333333333,
            'tin' => 4444444444,
            'driversLisence' => 5555555555,
            'contactPerson' => 'Stephen Strange',
            'contactNumber' => 9331004000,
            'address' => 'Grand centennial commercial bldg. Block 2D, lot 6, adventurine st. Brgy. Magdalo,Kawit Cavite'
        ],
        [
            'id' => 20230011,
            'firstname' => 'Barry',
            'middlename' => 'Summer',
            'lastname' => 'Allen',
            'jobPosition' => 'Designer',
            'mobileNumber' => 9624100206,
            'sss' => 1111111111,
            'pagibig' => 2222222222,
            'philHealth' => 3333333333,
            'tin' => 4444444444,
            'driversLisence' => 5555555555,
            'contactPerson' => 'Stephen Strange',
            'contactNumber' => 9331004000,
            'address' => 'Grand centennial commercial bldg. Block 2D, lot 6, adventurine st. Brgy. Magdalo,Kawit Cavite'
        ],
        [
            'id' => 20230009,
            'firstname' => 'Scott',
            'middlename' => 'Smith',
            'lastname' => 'Brown',
            'jobPosition' => 'Worker',
            'mobileNumber' => 9624100206,
            'sss' => 1111111111,
            'pagibig' => 2222222222,
            'philHealth' => 3333333333,
            'tin' => 4444444444,
            'driversLisence' => 5555555555,
            'contactPerson' => 'Stephen Strange',
            'contactNumber' => 9331004000,
            'address' => 'Grand centennial commercial bldg. Block 2D, lot 6, adventurine st. Brgy. Magdalo,Kawit Cavite'
        ],
        [
            'id' => 20230024,
            'firstname' => 'Tony',
            'middlename' => 'Washington',
            'lastname' => 'Stark',
            'jobPosition' => 'Engineer',
            'mobileNumber' => 9624100206,
            'sss' => 1111111111,
            'pagibig' => 2222222222,
            'philHealth' => 3333333333,
            'tin' => 4444444444,
            'driversLisence' => 5555555555,
            'contactPerson' => 'Stephen Strange',
            'contactNumber' => 9331004000,
            'address' => 'Grand centennial commercial bldg. Block 2D, lot 6, adventurine st. Brgy. Magdalo,Kawit Cavite'
        ]
    ]]);
});


Route::get('/card-preview', function () {
    return view('employeeIDCard');
});
