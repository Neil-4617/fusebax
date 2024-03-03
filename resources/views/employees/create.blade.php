<x-layout>
<div class="fusebax-container-1">
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
                                    <label for="firstname" class="form-label mb-0 ms-2">Firstname *</label>
                                    <input 
                                    type="text" 
                                    class="form-control" 
                                    id="firstname" 
                                    name="firstname" 
                                    value="{{old('firstname')}}"
                                    minlength="2"
                                    maxlength="25"
                                    oninput="this.value = this.value.replace(/[^a-zA-Z]|/g,'')" 
                                    required>
                                    <small data-valid-firstname class="valid-feedback">Looks good!</small>                                
                                    @error('firstname')
                                        <small class="small text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                
                                <div class="col-md-4 mb-3">
                                    <label for="middlename" class="form-label mb-0 ms-2">Middlename *</label>
                                    <input 
                                    type="text" 
                                    class="form-control" 
                                    id="middlename" 
                                    name="middlename" 
                                    value="{{old('middlename')}}" 
                                    minlength="2"
                                    maxlength="25"
                                    oninput="this.value = this.value.replace(/[^a-z|^A-Z]|/g,'')" 
                                    required>
                                    <small data-valid-middlename class="valid-feedback">Looks good!</small>
                                    @error('middlename')
                                        <small class="small text-danger">{{$message}}</small>
                                    @enderror
                                    
                                </div>
        
                                <div class="col-md-4 mb-3">
                                    <label for="lastname" class="form-label mb-0 ms-2">Lastname *</label>
                                    <input 
                                    type="text" 
                                    class="form-control" 
                                    id="lastname" 
                                    name="lastname" 
                                    value="{{old('lastname')}}" 
                                    minlength="2"
                                    maxlength="25"
                                    oninput="this.value = this.value.replace(/[^a-z|^A-Z]|/g,'')" 
                                    required>
                                    <small data-valid-lastname class="valid-feedback">Looks good!</small>
                                    @error('lastname')
                                        <small class="small text-danger">{{$message}}</small>
                                    @enderror
                                    
                                </div>
        
                                <div class="col-md-4 mb-3">
                                    <label for="mobileNumber" class="form-label mb-0 ms-2">Mobile Number *</label>
                                    <input 
                                    type="text" 
                                    class="form-control" 
                                    id="mobileNumber" 
                                    name="mobileNumber" 
                                    value="{{old('mobileNumber')}}" 
                                    oninput="this.value = this.value.replace(/[^0-9]|/g,'')"
                                    minlength="10"
                                    maxlength="10" 
                                    required>
                                    <small data-valid-mobileNumber class="valid-feedback">Looks good!</small> @error('mobileNumber')
                                        <small class="small text-danger">{{$message}}</small>
                                    @enderror
                                    
                                </div>
        
                                <div class="col-md-4">
                                    <label for="email" class="form-label mb-0 ms-2">Email Address</label>
                                    <input 
                                    type="email" 
                                    class="form-control" 
                                    id="email" 
                                    name="email" 
                                    value="{{old('email')}}" 
                                    required>
                                    <small data-valid-email class="valid-feedback">Looks good!</small> 
                                    @error('email')
                                        <small class="small text-danger">{{$message}}</small>
                                    @enderror
                                    
                                </div>
        
                                <div class="col-md-4">
                                    <label 
                                    for="birthday" class="form-label mb-0 ms-2">Birthday</label>
                                    <input 
                                    type="date" 
                                    class="form-control" 
                                    id="birthday" 
                                    name="birthday" 
                                    value="{{old('birthday')}}" 
                                    required>
                                    <small data-valid-birthday class="valid-feedback">Looks good!</small> 
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
                                <label for="addressHouseNumber" class="form-label mb-0 ms-2">House # *</label>
                                <input 
                                type="text" 
                                class="form-control" 
                                id="addressHouseNumber" 
                                name="addressHouseNumber" 
                                value="{{old('addressHouseNumber')}}" 
                                required>
                                <small data-valid-addressHouseNumber class="valid-feedback">Looks good!</small> 
                                @error('addressHouseNumber')
                                    <small class="small text-danger">{{$message}}</small>
                                @enderror
                            </div>
                
                            <div class="col-md-4 mb-3">
                                <label for="addressStreet" class="form-label mb-0 ms-2">Street Name *</label>
                                <input 
                                type="text" 
                                class="form-control" 
                                id="addressStreet" 
                                name="addressStreet" 
                                value="{{old('addressStreet')}}" 
                                required>
                                <small data-valid-addressStreet class="valid-feedback">Looks good!</small> 
                                @error('addressStreet')
                                    <small class="small text-danger">{{$message}}</small>
                                @enderror
                            </div>
                
                            <div class="col-md-4 mb-3">
                                <label for="addressLine2" class="form-label mb-0 ms-2">Unit# Floor Bldg Bgy</label>
                                <input 
                                type="text" 
                                class="form-control" 
                                id="addressLine2" 
                                name="addressLine2" 
                                value="{{old('addressLine2')}}"> 
                            </div>
                                
                
                            <div class="col-md-4 mb-3">
                                <label for="addressCity" class="form-label mb-0 ms-2">City / Municipality *</label>
                                <input 
                                type="text" 
                                class="form-control" 
                                id="addressCity" 
                                name="addressCity" 
                                value="{{old('addressCity')}}" 
                                required>
                                <small data-valid-addressCity class="valid-feedback">Looks good!</small> 
                                @error('addressCity')
                                    <small class="small text-danger">{{$message}}</small>
                                @enderror
                            </div>
                
                            <div class="col-md mb-3">
                                <label for="addressProvince" class="form-label mb-0 ms-2">Province *</label>
                                <input type="text" class="form-control" id="addressProvince" name="addressProvince" value="{{old('addressProvince')}}" required>
                                <small data-valid-addressProvince class="valid-feedback">Looks good!</small> 
                                @error('addressProvince')
                                    <small class="small text-danger">{{$message}}</small>
                                @enderror
                            </div>
                
                            <div class="col-md mb-3">
                                <label for="addressCountry" class="form-label mb-0 ms-2">Country *</label>
                                <input type="text" class="form-control" id="addressCountry" name="addressCountry" value="{{old('addressCountry')}}" required>
                                <small data-valid-addressCountry class="valid-feedback">Looks good!</small> 
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
                                <label for="sss" class="form-label mb-0 ms-2">SSS Number *</label>
                                <input 
                                type="text" 
                                class="form-control" 
                                id="sss" 
                                name="sss" 
                                value="{{old('name')}}"
                                oninput="this.value = this.value.replace(/[^0-9]|/g,'')"
                                minlength="10" 
                                maxlength="10"
                                required>
                                <small data-valid-sss class="valid-feedback">Looks good!</small> 
                            </div>
                                
                            <div class="col-md-4 mb-3">
                                <label for="pagibig" class="form-label mb-0 ms-2">Pagibig # *</label>
                                <input 
                                type="text" 
                                class="form-control" 
                                id="pagibig" 
                                name="pagibig" 
                                value="{{old('pagibig')}}" 
                                oninput="this.value = this.value.replace(/[^0-9]|/g,'')"
                                minlength="12" 
                                maxlength="12"
                                required>
                                <small data-valid-pagibig class="valid-feedback">Looks good!</small> 
                            </div>
                                
                            <div class="col-md-4 mb-3">
                                <label for="philHealth" class="form-label mb-0 ms-2">PhilHealth # *</label>
                                <input 
                                type="text" 
                                class="form-control" 
                                id="philHealth" 
                                name="philHealth" 
                                value="{{old('philHealth')}}"
                                oninput="this.value = this.value.replace(/[^0-9]|/g,'')"
                                minlength="12" 
                                maxlength="12"
                                required>
                                <small data-valid-philHealth class="valid-feedback">Looks good!</small>
                            </div>
                
                            <div class="col-md-6 mb-3">
                                <label for="tin" class="form-label mb-0 ms-2">TIN *</label>
                                <input 
                                type="text" 
                                class="form-control" 
                                id="tin" 
                                name="tin" 
                                value="{{old('tin')}}"
                                oninput="this.value = this.value.replace(/[^0-9]|/g,'')"
                                minlength="9" 
                                maxlength="12"
                                required>
                                <small data-valid-tin class="valid-feedback">Looks good!</small>
                            </div>
                
                            <div class="col-md-6 mb-3">
                                <label for="driversLicense" class="form-label mb-0 ms-2">Drivers License #</label>
                                <input 
                                type="text" 
                                class="form-control" 
                                id="driversLicense" 
                                name="driversLicense" 
                                value="{{old('driversLicense')}}"
                                oninput="this.value = this.value.replace(/[^0-9]|/g,'')"
                                minlength="12" 
                                maxlength="12"
                                required>
                                <small data-valid-driversLicense class="valid-feedback">Looks good!</small>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="contactPerson" class="form-label mb-0 ms-2">Contact Person In Case Of Emergency *</label>
                                <input type="text" class="form-control" id="contactPerson" name="contactPerson" value="{{old('contactPerson')}}"
                                oninput="this.value = this.value.replace(/[^a-z|^A-Z]|/g,'')"
                                minlength="2" 
                                maxlength="25"
                                required>
                                <small data-valid-contactPerson class="valid-feedback">Looks good!</small>
                            </div>
                
                            <div class="col-md-6 mb-3">
                                <label for="contactNumber" class="form-label mb-0 ms-2">Contact Number In Case Of Emergency *</label>
                                <input type="number" class="form-control" id="contactNumber" name="contactNumber" value="{{old('contactNumber')}}"
                                oninput="this.value = this.value.replace(/[^0-9]|/g,'')"
                                minlength="10" 
                                maxlength="10"
                                required>
                                <small data-valid-contactNumber class="valid-feedback">Looks good!</small>
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
                                <label for="jobPosition" class="form-label mb-0 ms-2">Job Position *</label>
                                <input 
                                type="text" 
                                class="form-control" 
                                id="jobPosition" 
                                name="jobPosition" 
                                value="{{old('jobPosition')}}" 
                                required>
                                <small data-valid-jobPosition class="valid-feedback">Looks good!</small>
                                @error('jobPosition')
                                    <small class="small text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="dateHired" class="form-label mb-0 ms-2">Date Hired *</label>
                                <input 
                                type="date" 
                                class="form-control" 
                                id="dateHired" 
                                name="dateHired" 
                                value="{{old('dateHired')}}" 
                                required>
                                <small data-valid-dateHired class="valid-feedback">Looks good!</small>
                                 @error('dateHired')
                                    <small class="small text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            
                            <div class="col-md mb-3">
                                <label for="employeePhoto" class="form-label mb-0 ms-2">Upload ID *</label>
                                <input 
                                type="file" 
                                class="form-control" 
                                id="employeePhoto" 
                                name="employeePhoto" 

                                value="{{old('employeePhoto')}}" 
                                required>
                                <small data-valid-employeePhoto class="valid-feedback">Looks good!</small>
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
</div>
</x-layout>