<x-layout>

    <div class="px-3 mt-4">
        <form method="POST" action="/employees" enctype="multipart/form-data" data-multi-step novalidate>
            @csrf
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card mb-2 fusebax-card px-3" data-step>
                        <h2 class="text-center fs-4 text-black mb-5 mx-1 mx-md-4 mt-4">Personal Information</h2>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="firstname" class="form-label mb-0 ms-2">Firstname</label>
                                    <input type="text" class="form-control" id="firstname" name="firstname" value="{{old('firstname')}}" required>
                                    @error('firstname')
                                        <div class="small text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                
                                <div class="col-md-4 mb-3">
                                    <label for="middlename" class="form-label mb-0 ms-2">Middlename</label>
                                    <input type="text" class="form-control" id="middlename" name="middlename" value="{{old('middlename')}}" required>
                                    @error('middlename')
                                        <small class="small text-danger">{{$message}}</small>
                                    @enderror
                                    
                                </div>
        
                                <div class="col-md-4 mb-3">
                                    <label for="lastname" class="form-label mb-0 ms-2">Lastname</label>
                                    <input type="text" class="form-control" id="lastname" name="lastname" value="{{old('lastname')}}" required>
                                    @error('lastname')
                                        <small class="small text-danger">{{$message}}</small>
                                    @enderror
                                    
                                </div>
        
                                <div class="col-md-4 mb-3">
                                    <label for="mobileNumber" class="form-label mb-0 ms-2">Mobile Number</label>
                                    <input type="number" class="form-control" id="mobileNumber" name="mobileNumber" value="{{old('mobileNumber')}}" required>
                                    @error('mobileNumber')
                                        <small class="small text-danger">{{$message}}</small>
                                    @enderror
                                    
                                </div>
        
                                <div class="col-md-4">
                                    <label for="email" class="form-label mb-0 ms-2">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" required>
                                    @error('email')
                                        <small class="small text-danger">{{$message}}</small>
                                    @enderror
                                    
                                </div>
        
                                <div class="col-md-4">
                                    <label for="birthday" class="form-label mb-0 ms-2">Birthday</label>
                                    <input type="date" class="form-control" id="birthday" name="birthday" value="{{old('birthday')}}" required>
                                    @error('birthday')
                                        <small class="small text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="d-flex justify-content-center mt-4">
                                    <button class="btn fusebax-btn" type="button" data-next>Next</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-2 fusebax-card px-3" data-step>
                        <h2 class="text-center fs-4 text-black mb-5 mx-1 mx-md-4 mt-4">Address</h2>
                        <div class="card-body row">
                            <div class="col-md-2 mb-3">
                                <label for="addressHouseNumber" class="form-label mb-0 ms-2">House #</label>
                                <input type="text" class="form-control" id="addressHouseNumber" name="addressHouseNumber" value="{{old('addressHouseNumber')}}" required>
                                 @error('addressHouseNumber')
                                    <small class="small text-danger">{{$message}}</small>
                                @enderror
                            </div>
                
                            <div class="col-md-4 mb-3">
                                <label for="addressStreet" class="form-label mb-0 ms-2">Street Name</label>
                                <input type="text" class="form-control" id="addressStreet" name="addressStreet" value="{{old('addressStreet')}}" required>
                                 @error('addressStreet')
                                    <small class="small text-danger">{{$message}}</small>
                                @enderror
                            </div>
                
                            <div class="col-md-4 mb-3">
                                <label for="addressLine2" class="form-label mb-0 ms-2">Unit# Floor Bldg Bgy</label>
                                <input type="text" class="form-control" id="addressLine2" name="addressLine2" value="{{old('addressLine2')}}">
                            </div>
                
                            <div class="col-md-4 mb-3">
                                <label for="addressCity" class="form-label mb-0 ms-2">City / Municipality</label>
                                <input type="text" class="form-control" id="addressCity" name="addressCity" value="{{old('addressCity')}}" required>
                                 @error('addressCity')
                                    <small class="small text-danger">{{$message}}</small>
                                @enderror
                            </div>
                
                            <div class="col-md mb-3">
                                <label for="addressProvince" class="form-label mb-0 ms-2">Province</label>
                                <input type="text" class="form-control" id="addressProvince" name="addressProvince" value="{{old('addressProvince')}}" required>
                                 @error('addressProvince')
                                    <small class="small text-danger">{{$message}}</small>
                                @enderror
                            </div>
                
                            <div class="col-md mb-3">
                                <label for="addressCountry" class="form-label mb-0 ms-2">Country</label>
                                <input type="text" class="form-control" id="addressCountry" name="addressCountry" value="{{old('addressCountry')}}" required>
                                 @error('addressCountry')
                                    <small class="small text-danger">{{$message}}</small>
                                @enderror
                            </div>
                
                            <div class="col-md-2 mb-3">
                                <label for="addressZipCode" class="form-label mb-0 ms-2">Zip Code</label>
                                <input type="number" class="form-control" id="addressZipCode" name="addressZipCode" value="{{old('addressZipCode')}}">
                            </div>
                            <div class="d-flex justify-content-between my-4">
                                <button class="btn fusebax-btn-outlined" type="button" data-previous >Previous</button>
                                <button class="btn fusebax-btn" type="button" data-next >Next</button>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-2 fusebax-card px-3" data-step>
                        <h2 class="text-center fs-4 text-black mb-5 mx-1 mx-md-4 mt-4">Other Information</h2>
                        <div class="card-body row">
                            <div class="col-md-4 mb-3">
                                <label for="sss" class="form-label mb-0 ms-2">SSS Number</label>
                                <input type="number" class="form-control" id="sss" name="sss" value="{{old('name')}}">
                            </div>
                
                            <div class="col-md-4 mb-3">
                                <label for="pagibig" class="form-label mb-0 ms-2">Pagibig #</label>
                                <input type="number" class="form-control" id="pagibig" name="pagibig" value="{{old('pagibig')}}">
                            </div>
                
                            <div class="col-md-4 mb-3">
                                <label for="philHealth" class="form-label mb-0 ms-2">PhilHealth #</label>
                                <input type="number" class="form-control" id="philHealth" name="philHealth" value="{{old('philHealth')}}">
                            </div>
                
                            <div class="col-md-6 mb-3">
                                <label for="tin" class="form-label mb-0 ms-2">TIN</label>
                                <input type="number" class="form-control" id="tin" name="tin" value="{{old('tin')}}">
                            </div>
                
                            <div class="col-md-6 mb-3">
                                <label for="driversLisence" class="form-label mb-0 ms-2">Drivers Lisence #</label>
                                <input type="text" class="form-control" id="driversLisence" name="driversLisence" value="{{old('driversLisence')}}">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="contactPerson" class="form-label mb-0 ms-2">Contact Person In Case Of Emergency</label>
                                <input type="text" class="form-control" id="contactPerson" name="contactPerson" value="{{old('contactPerson')}}">
                            </div>
                
                            <div class="col-md-6 mb-3">
                                <label for="contactNumber" class="form-label mb-0 ms-2">Contact Number In Case Of Emergency</label>
                                <input type="number" class="form-control" id="contactNumber" name="contactNumber" value="{{old('contactNumber')}}">
                            </div>
                            <div class="d-flex justify-content-between my-4">
                                <button class="btn fusebax-btn-outlined" type="button" data-previous >Previous</button>
                                <button class="btn fusebax-btn" type="button" data-next >Next</button>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-2 fusebax-card px-3" data-step>
                        <h2 class="text-center fs-4 text-black mb-5 mx-1 mx-md-4 mt-4">Company Info</h2>
                        <div class="card-body row">
                            <div class="col-md-6 mb-3">
                                <label for="jobPosition" class="form-label mb-0 ms-2">Job Position</label>
                                <input type="text" class="form-control" id="jobPosition" name="jobPosition" value="{{old('jobPosition')}}" required>
                                 @error('jobPosition')
                                    <small class="small text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="dateHired" class="form-label mb-0 ms-2">Date Hired</label>
                                <input type="date" class="form-control" id="dateHired" name="dateHired" value="{{old('dateHired')}}" required>
                                 @error('dateHired')
                                    <small class="small text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            
                            <div class="col-md mb-3">
                                <label for="employeePhoto" class="form-label mb-0 ms-2">Upload ID</label>
                                <input type="file" class="form-control" id="employeePhoto" name="employeePhoto" value="{{old('employeePhoto')}}" required>
                                @error('employeePhoto')
                                    <small class="small text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="d-flex justify-content-between my-4">
                                <button class="btn fusebax-btn-outlined" type="button" data-previous >Previous</button>
                                <button type="submit" class="btn fusebax-btn">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>           
        </form>    
    </div>
</x-layout>