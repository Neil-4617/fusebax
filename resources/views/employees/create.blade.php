<x-layout>
    <div class="p-5 mt-1">
        <form method="POST" action="/employees" enctype="multipart/form-data" novalidate>
            @csrf
            <div class="card mb-2">
                <div class="card-header mb-2">
                    <div class="card-title">Personal Info</div>
                </div>
                <div class="card-body row">
                    <div class="col-md-4">
                        <label for="firstname" class="form-label">Firstname</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" value="{{old('firstname')}}" required>
                        @error('firstname')
                            <div class="small text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    
                    <div class="col-md-4">
                        <label for="middlename" class="form-label">Middlename</label>
                        <input type="text" class="form-control" id="middlename" name="middlename" value="{{old('middlename')}}" required>
                        @error('middlename')
                            <small class="small text-danger">{{$message}}</small>
                        @enderror
                        
                    </div>

                    <div class="col-md-4">
                        <label for="lastname" class="form-label">Lastname</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" value="{{old('lastname')}}" required>
                        @error('lastname')
                            <small class="small text-danger">{{$message}}</small>
                        @enderror
                        
                    </div>

                    <div class="col-md-4">
                        <label for="mobileNumber" class="form-label">Mobile Number</label>
                        <input type="number" class="form-control" id="mobileNumber" name="mobileNumber" value="{{old('mobileNumber')}}" required>
                        @error('mobileNumber')
                            <small class="small text-danger">{{$message}}</small>
                        @enderror
                        
                    </div>

                    <div class="col-md-4">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" required>
                        @error('email')
                            <small class="small text-danger">{{$message}}</small>
                        @enderror
                        
                    </div>

                    <div class="col-md-4">
                        <label for="birthday" class="form-label">Birthday</label>
                        <input type="date" class="form-control" id="birthday" name="birthday" value="{{old('birthday')}}" required>
                        @error('birthday')
                            <small class="small text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="card mb-2">
                <div class="card-header">
                    <div class="card-title">Address</div>
                </div>
                <div class="card-body row">
                    <div class="col-md-2">
                        <label for="addressHouseNumber" class="form-label">House Number</label>
                        <input type="text" class="form-control" id="addressHouseNumber" name="addressHouseNumber" value="{{old('addressHouseNumber')}}" required>
                         @error('addressHouseNumber')
                            <small class="small text-danger">{{$message}}</small>
                        @enderror
                    </div>
        
                    <div class="col-md-4">
                        <label for="addressStreet" class="form-label">Street Name</label>
                        <input type="text" class="form-control" id="addressStreet" name="addressStreet" value="{{old('addressStreet')}}" required>
                         @error('addressStreet')
                            <small class="small text-danger">{{$message}}</small>
                        @enderror
                    </div>
        
                    <div class="col-md-4">
                        <label for="addressLine2" class="form-label">Unit# Floor Buiding Name Barangay</label>
                        <input type="text" class="form-control" id="addressLine2" name="addressLine2" value="{{old('addressLine2')}}">
                    </div>
        
                    <div class="col-md-4">
                        <label for="addressCity" class="form-label">City / Municipality</label>
                        <input type="text" class="form-control" id="addressCity" name="addressCity" value="{{old('addressCity')}}" required>
                         @error('addressCity')
                            <small class="small text-danger">{{$message}}</small>
                        @enderror
                    </div>
        
                    <div class="col-md">
                        <label for="addressProvince" class="form-label">Province</label>
                        <input type="text" class="form-control" id="addressProvince" name="addressProvince" value="{{old('addressProvince')}}" required>
                         @error('addressProvince')
                            <small class="small text-danger">{{$message}}</small>
                        @enderror
                    </div>
        
                    <div class="col-md">
                        <label for="addressCountry" class="form-label">Country</label>
                        <input type="text" class="form-control" id="addressCountry" name="addressCountry" value="{{old('addressCountry')}}" required>
                         @error('addressCountry')
                            <small class="small text-danger">{{$message}}</small>
                        @enderror
                    </div>
        
                    <div class="col-md-2">
                        <label for="addressZipCode" class="form-label">Zip Code</label>
                        <input type="number" class="form-control" id="addressZipCode" name="addressZipCode" value="{{old('addressZipCode')}}">
                    </div>
                </div>
            </div>

            <div class="card mb-2">
                <div class="card-header">
                    <div class="card-title">Other Info</div>
                </div>
                <div class="card-body row">
                    <div class="col-md-3">
                        <label for="sss" class="form-label">SSS Number</label>
                        <input type="number" class="form-control" id="sss" name="sss" value="{{old('name')}}">
                    </div>
        
                    <div class="col-md-3">
                        <label for="pagibig" class="form-label">Pagibig Number</label>
                        <input type="number" class="form-control" id="pagibig" name="pagibig" value="{{old('pagibig')}}">
                    </div>
        
                    <div class="col-md-3">
                        <label for="philHealth" class="form-label">PhilHealth Number</label>
                        <input type="number" class="form-control" id="philHealth" name="philHealth" value="{{old('philHealth')}}">
                    </div>
        
                    <div class="col-md-3">
                        <label for="tin" class="form-label">Tax Identification Number</label>
                        <input type="number" class="form-control" id="tin" name="tin" value="{{old('tin')}}">
                    </div>
        
                    <div class="col-md-3">
                        <label for="driversLisence" class="form-label">Drivers Lisence Number</label>
                        <input type="text" class="form-control" id="driversLisence" name="driversLisence" value="{{old('driversLisence')}}">
                    </div>
        
                    <div class="col-md">
                        <label for="contactPerson" class="form-label">Contact Person In Case Of Emergency</label>
                        <input type="text" class="form-control" id="contactPerson" name="contactPerson" value="{{old('contactPerson')}}">
                    </div>
        
                    <div class="col-md">
                        <label for="contactNumber" class="form-label">Contact Number In Case Of Emergency</label>
                        <input type="number" class="form-control" id="contactNumber" name="contactNumber" value="{{old('contactNumber')}}">
                    </div>
                </div>
            </div>
            
            <div class="card mb-2">
                <div class="card-header">
                    <div class="card-title">Company Info</div>
                </div>
                <div class="card-body row">
                    <div class="col-md">
                        <label for="jobPosition" class="form-label">Job Position</label>
                        <input type="text" class="form-control" id="jobPosition" name="jobPosition" value="{{old('jobPosition')}}" required>
                         @error('jobPosition')
                            <small class="small text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    
                    <div class="col-md-4">
                        <label for="dateHired" class="form-label">Date Hired</label>
                        <input type="date" class="form-control" id="dateHired" name="dateHired" value="{{old('dateHired')}}" required>
                         @error('dateHired')
                            <small class="small text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    
                    <div class="col-md">
                        <label for="employeePhoto" class="form-label">Upload ID</label>
                        <input type="file" class="form-control" id="employeePhoto" name="employeePhoto" value="{{old('employeePhoto')}}" required>
                         @error('employeePhoto')
                            <small class="small text-danger">{{$message}}</small>
                        @enderror
                    </div>

                </div>
            </div>


            <button type="submit" class="btn btn-primary mt-2 mb-5 px-4">Submit</button>
        </form>    
    </div>
</x-layout>