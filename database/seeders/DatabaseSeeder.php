<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Employee;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //password: *amshr
        User::create([
            'username' => 'rowena',
            'email' => 'rd@email.com',
            'password' => '$2a$10$MyVyNG4Qk7Q04z0amQNrzey4hZoYws8RLYidqCT589a8o.Zqhyk7a'
        ]);
    
        Employee::create([
                'firstname' => 'Scott',
                'middlename' => 'Smith',
                'lastname' => 'Brown',
                'gender' => 'male',
                'jobPosition' => 'Worker',
                'mobileNumber' => 9624100206,
                'email' => 'sb@email.com',
                'birthday' => Carbon::create('1994', '03', '20'),
                'dateHired' => Carbon::create('2023', '11', '13'),
                'sss' => 1111111111,
                'pagibig' => 222222222222,
                'philHealth' => 333333333333,
                'tin' => 444444444444,
                'driversLicense' => 555555555555,
                'contactPerson' => 'Stephen Strange',
                'contactNumber' => 9331004000,
                'addressHouseNumber' => '2D',
                'addressStreet' => 'adventurine st',
                'addressLine2' => 'grand centennial commercial bldg. Block 2D, lot 6',
                'addressCity' => 'kawit',
                'addressProvince' => 'cavite',
                'addressCountry' => 'philippines',
                'addressZipCode' => '4103'
            ]
        );
        Employee::create([
                'firstname' => 'Tony',
                'middlename' => 'Washington',
                'lastname' => 'Stark',
                'gender' => 'male',
                'jobPosition' => 'Engineer',
                'mobileNumber' => 9624100206,
                'email' => 'ts@email.com',
                'birthday' => Carbon::create('1991', '08', '05'),
                'dateHired' => Carbon::create('2022', '09', '17'),
                'sss' => 1111111111,
                'pagibig' => 222222222222,
                'philHealth' => 333333333333,
                'tin' => 444444444444,
                'driversLicense' => 555555555555,
                'contactPerson' => 'Stephen Strange',
                'contactNumber' => 9331004000,
                'addressHouseNumber' => '2D',
                'addressStreet' => 'adventurine st',
                'addressLine2' => 'grand centennial commercial bldg. Block 2D, lot 6',
                'addressCity' => 'kawit',
                'addressProvince' => 'cavite',
                'addressCountry' => 'philippines',
                'addressZipCode' => '4103'
            ]
        );
        Employee::create([
                'firstname' => 'John',
                'middlename' => 'Ngueyen',
                'lastname' => 'Doe',
                'gender' => 'male',
                'jobPosition' => 'Driver',
                'mobileNumber' => 9624100206,
                'email' => 'jd@email.com',
                'birthday' => Carbon::create('1994', '05', '08'),
                'dateHired' => Carbon::create('2024', '01', '03'),
                'sss' => 1111111111,
                'pagibig' => 222222222222,
                'philHealth' => 333333333333,
                'tin' => 444444444444,
                'driversLicense' => 555555555555,
                'contactPerson' => 'Stephen Strange',
                'contactNumber' => 9331004000,
                'addressHouseNumber' => '2D',
                'addressStreet' => 'adventurine st',
                'addressLine2' => 'grand centennial commercial bldg. Block 2D, lot 6',
                'addressCity' => 'kawit',
                'addressProvince' => 'cavite',
                'addressCountry' => 'philippines',
                'addressZipCode' => '4103'
            ]
        );
        Employee::create([
                'firstname' => 'Barry',
                'middlename' => 'Summer',
                'lastname' => 'Allen',
                'gender' => 'male',
                'jobPosition' => 'Designer',
                'mobileNumber' => 9624100206,
                'email' => 'ba@email.com',
                'birthday' => Carbon::create('1989', '07', '12'),
                'dateHired' => Carbon::create('2020', '06', '27'),
                'sss' => 1111111111,
                'pagibig' => 222222222222,
                'philHealth' => 333333333333,
                'tin' => 444444444444,
                'driversLicense' => 555555555555,
                'contactPerson' => 'Stephen Strange',
                'contactNumber' => 9331004000,
                'addressHouseNumber' => '2D',
                'addressStreet' => 'paris st',
                'addressLine2' => 'patricia subd. block 2D, lot 6',
                'addressCity' => 'imus city',
                'addressProvince' => 'cavite',
                'addressCountry' => 'philippines',
                'addressZipCode' => '4103'
            ]
        );
        Employee::create([
                'firstname' => 'Logan',
                'middlename' => 'Lee',
                'lastname' => 'Xianxing',
                'gender' => 'male',
                'jobPosition' => 'driversLicense',
                'mobileNumber' => 9624100206,
                'email' => 'lx@email.com',
                'birthday' => Carbon::create('1989', '07', '12'),
                'dateHired' => Carbon::create('2020', '06', '27'),
                'sss' => 1111111111,
                'pagibig' => 222222222222,
                'philHealth' => 333333333333,
                'tin' => 444444444444,
                'driversLicense' => 555555555555,
                'contactPerson' => 'Molly Watson',
                'contactNumber' => 9331004000,
                'addressHouseNumber' => '2D',
                'addressStreet' => 'paris st',
                'addressLine2' => 'patricia subd. block 2D, lot 6',
                'addressCity' => 'imus city',
                'addressProvince' => 'cavite',
                'addressCountry' => 'philippines',
                'addressZipCode' => '4103'
            ]
        );
        Employee::create([
                'firstname' => 'Gwen',
                'middlename' => 'Morgan',
                'lastname' => 'Stacy',
                'gender' => 'female',
                'jobPosition' => 'driversLicense',
                'mobileNumber' => 9624100206,
                'email' => 'gs@email.com',
                'birthday' => Carbon::create('1989', '07', '12'),
                'dateHired' => Carbon::create('2020', '06', '27'),
                'sss' => 1111111111,
                'pagibig' => 222222222222,
                'philHealth' => 333333333333,
                'tin' => 444444444444,
                'driversLicense' => 555555555555,
                'contactPerson' => 'Albert Perterson',
                'contactNumber' => 9331004000,
                'addressHouseNumber' => '2D',
                'addressStreet' => 'paris st',
                'addressLine2' => 'patricia subd. block 2D, lot 6',
                'addressCity' => 'imus city',
                'addressProvince' => 'cavite',
                'addressCountry' => 'philippines',
                'addressZipCode' => '4103'
            ]
        );
        Employee::create([
                'firstname' => 'Catalina',
                'middlename' => 'Zeng',
                'lastname' => 'Hibo',
                'gender' => 'female',
                'jobPosition' => 'driversLicense',
                'mobileNumber' => 9624100206,
                'email' => 'ch@email.com',
                'birthday' => Carbon::create('1989', '07', '12'),
                'dateHired' => Carbon::create('2020', '06', '27'),
                'sss' => 1111111111,
                'pagibig' => 222222222222,
                'philHealth' => 333333333333,
                'tin' => 444444444444,
                'driversLicense' => 555555555555,
                'contactPerson' => 'Sheldon Chen',
                'contactNumber' => 9331004000,
                'addressHouseNumber' => '2D',
                'addressStreet' => 'paris st',
                'addressLine2' => 'patricia subd. block 2D, lot 6',
                'addressCity' => 'imus city',
                'addressProvince' => 'cavite',
                'addressCountry' => 'philippines',
                'addressZipCode' => '4103'
            ]
        );
        
    }
}
