<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    // Search functionality using $query and array with a variable of $filters
    public function scopefilter($query, array $filters){
        
        if ($filters['search'] ?? false) {
            $query->where('firstname', 'like', '%' . request('search') . '%')
            ->orWhere('middlename', 'like', '%' . request('search') . '%')
            ->orWhere('lastname', 'like', '%' . request('search') . '%')
            ->orWhere('jobPosition', 'like', '%' . request('search') . '%')
            ->orWhere('mobileNumber', 'like', '%' . request('search') . '%')
            ->orWhere('birthday', 'like', '%' . request('search') . '%')
            ->orWhere('dateHired', 'like', '%' . request('search') . '%')
            ->orWhere('email', 'like', '%' . request('search') . '%')
            ->orWhere('sss', 'like', '%' . request('search') . '%')
            ->orWhere('pagibig', 'like', '%' . request('search') . '%')
            ->orWhere('philHealth', 'like', '%' . request('search') . '%')
            ->orWhere('tin', 'like', '%' . request('search') . '%')
            ->orWhere('driversLisence', 'like', '%' . request('search') . '%')
            ->orWhere('contactPerson', 'like', '%' . request('search') . '%')
            ->orWhere('contactNumber', 'like', '%' . request('search') . '%')
            ->orWhere('adressHouseNumber', 'like', '%' . request('search') . '%')
            ->orWhere('adressStreet', 'like', '%' . request('search') . '%')
            ->orWhere('addressLine2', 'like', '%' . request('search') . '%')
            ->orWhere('addressCity', 'like', '%' . request('search') . '%')
            ->orWhere('addressProvince', 'like', '%' . request('search') . '%')
            ->orWhere('addressCountry', 'like', '%' . request('search') . '%')
            ->orWhere('addressZipCode', 'like', '%' . request('search') . '%');
        }
    }
}
