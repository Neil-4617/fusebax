<x-layout>
    <div class="fusebax-container-1">
        <div class="px-3 mt-4">
            <form method="POST" action="/employees/{{$employee['id']}}" enctype="multipart/form-data" data-edit-form novalidate>
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="container">
                            <div class="row justify-content-center pb-5">
                                <div class="col-md-4">
                                    <div class="card mb-2 fusebax-card px-3 active" data-step>
                                        <h2 class="text-center fs-4 text-black mb-3 mx-1 mx-md-4 mt-4">Personal Information</h2>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <img class="img-fluid border border-secondary mb-2" src="{{$employee['employeeImagePath']? $employee['employeeImagePath'] : asset('asset/images/companyID/imageHere.png')}}"/>
                                                    <label for="employeePhoto" class="form-label mb-0 ms-2">Upload ID *</label>
                                                    <input 
                                                    type="file" 
                                                    class="form-control" 
                                                    id="employeePhoto" 
                                                    name="employeePhoto"
                                                    required>
                                                    <small data-valid-employeePhoto class="valid-feedback">Looks good!</small>
                                                    @error('employeePhoto')
                                                        <small class="small text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label for="firstname" class="form-label mb-0 ms-2">First Name *</label>
                                                    <input 
                                                    type="text" 
                                                    class="form-control" 
                                                    id="firstname" 
                                                    name="firstname" 
                                                    value="{{$employee['firstname']}}"
                                                    minlength="2"
                                                    maxlength="25"
                                                    oninput="this.value = this.value.replace(/[^a-zA-Z]|/g,'')" 
                                                    required>
                                                    <small data-valid-firstname class="valid-feedback">Looks good!</small>                                
                                                    @error('firstname')
                                                        <small class="small text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                                
                                                <div class="col-md-12 mb-3">
                                                    <label for="middlename" class="form-label mb-0 ms-2">Middle Name *</label>
                                                    <input 
                                                    type="text" 
                                                    class="form-control" 
                                                    id="middlename" 
                                                    name="middlename" 
                                                    value="{{$employee['middlename']}}" 
                                                    minlength="2"
                                                    maxlength="25"
                                                    oninput="this.value = this.value.replace(/[^a-z|^A-Z]|/g,'')" 
                                                    required>
                                                    <small data-valid-middlename class="valid-feedback">Looks good!</small>
                                                    @error('middlename')
                                                        <small class="small text-danger">{{$message}}</small>
                                                    @enderror
                                                    
                                                </div>
                        
                                                <div class="col-md-12 mb-3">
                                                    <label for="lastname" class="form-label mb-0 ms-2">Surname *</label>
                                                    <input 
                                                    type="text" 
                                                    class="form-control" 
                                                    id="lastname" 
                                                    name="lastname" 
                                                    value="{{$employee['lastname']}}" 
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
                                                    <label for="gender" class="form-label mb-0 ms-2">Gender *</label>
                                                    <select 
                                                    name="gender" 
                                                    id="gender" 
                                                    class="form-control" 
                                                    required>
                                                        <option value="" @if($employee->gender == null ) {{ 'selected' }} @endif>
                                                        </option>
                                                        <option value="male" @if($employee->gender == "male") {{ 'selected' }} @endif>
                                                            Male
                                                        </option>
                                                        <option value="female" @if($employee->gender == "female") {{ 'selected' }} @endif>Female
                                                        </option>
                                                    </select>
                                                    <small data-valid-gender class="valid-feedback">Looks good!</small>
                                                    @error('gender')
                                                        <small class="small text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                                
                                                <div class="col-md-6 mb-3">
                                                    <label for="jobPosition" class="form-label mb-0 ms-2">Job Position *</label>
                                                    <input 
                                                    type="text" 
                                                    class="form-control" 
                                                    id="jobPosition" 
                                                    name="jobPosition" 
                                                    value="{{$employee['jobPosition']}}" 
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
                                                    value="{{$employee['dateHired']}}" 
                                                    required>
                                                    <small data-valid-dateHired class="valid-feedback">Looks good!</small>
                                                     @error('dateHired')
                                                        <small class="small text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                        
                                                <div class="col-md-12 mb-3">
                                                    <label for="mobileNumber" class="form-label mb-0 ms-2">Mobile Number *</label>
                                                    <input 
                                                    type="text" 
                                                    class="form-control" 
                                                    id="mobileNumber" 
                                                    name="mobileNumber" 
                                                    value="{{$employee['mobileNumber']}}" 
                                                    oninput="this.value = this.value.replace(/[^0-9]|/g,'')"
                                                    minlength="10"
                                                    maxlength="10" 
                                                    required>
                                                    <small data-valid-mobileNumber class="valid-feedback">Looks good!</small> @error('mobileNumber')
                                                        <small class="small text-danger">{{$message}}</small>
                                                    @enderror
                                                    
                                                </div>
                        
                                                <div class="col-md-12 mb-3">
                                                    <label for="email" class="form-label mb-0 ms-2">Email Address</label>
                                                    <input 
                                                    type="email" 
                                                    class="form-control" 
                                                    id="email" 
                                                    name="email" 
                                                    value="{{$employee['email']}}" 
                                                    required>
                                                    <small data-valid-email class="valid-feedback">Looks good!</small> 
                                                    @error('email')
                                                        <small class="small text-danger">{{$message}}</small>
                                                    @enderror
                                                    
                                                </div>
                        
                                                <div class="col-md-12 ">
                                                    <label 
                                                    for="birthday" class="form-label mb-0 ms-2">Birthday</label>
                                                    <input 
                                                    type="date" 
                                                    class="form-control" 
                                                    id="birthday" 
                                                    name="birthday" 
                                                    value="{{$employee['birthday']}}" 
                                                    required>
                                                    <small data-valid-birthday class="valid-feedback">Looks good!</small> 
                                                    @error('birthday')
                                                        <small class="small text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                                <div class="col-md-8">
                                    <div class="card mb-2 fusebax-card px-3 active" data-step>
                                        <h2 class="text-center fs-4 text-black mb-5 mx-1 mx-md-4 mt-4">Address</h2>
                                        <div class="card-body row">
                                            <div class="col-md-2 mb-3">
                                                <label for="addressHouseNumber" class="form-label mb-0 ms-2">House # *</label>
                                                <input 
                                                type="text" 
                                                class="form-control" 
                                                id="addressHouseNumber" 
                                                name="addressHouseNumber" 
                                                value="{{$employee['addressHouseNumber']}}" 
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
                                                value="{{$employee['addressStreet']}}" 
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
                                                value="{{$employee['addressLine2']}}"> 
                                            </div>
                                                
                                
                                            <div class="col-md-4 mb-3">
                                                <label for="addressCity" class="form-label mb-0 ms-2">City / Municipality *</label>
                                                <input 
                                                type="text" 
                                                class="form-control" 
                                                id="addressCity" 
                                                name="addressCity" 
                                                value="{{$employee['addressCity']}}" 
                                                required>
                                                <small data-valid-addressCity class="valid-feedback">Looks good!</small> 
                                                @error('addressCity')
                                                    <small class="small text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                
                                            <div class="col-md mb-3">
                                                <label for="addressProvince" class="form-label mb-0 ms-2">Province *</label>
                                                <input type="text" class="form-control" id="addressProvince" name="addressProvince" value="{{$employee['addressProvince']}}" required>
                                                <small data-valid-addressProvince class="valid-feedback">Looks good!</small> 
                                                @error('addressProvince')
                                                    <small class="small text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                
                                            <div class="col-md mb-3">
                                                <label for="addressCountry" class="form-label mb-0 ms-2">Country *</label>
                                                <input type="text" class="form-control" id="addressCountry" name="addressCountry" value="{{$employee['addressCountry']}}" required>
                                                <small data-valid-addressCountry class="valid-feedback">Looks good!</small> 
                                                @error('addressCountry')
                                                    <small class="small text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                
                                            <div class="col-md-2 mb-3">
                                                <label for="addressZipCode" class="form-label mb-0 ms-2">Zip Code</label>
                                                <input type="number" class="form-control" id="addressZipCode" name="addressZipCode" value="{{$employee['addressZipCode']}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2 fusebax-card px-3 active" data-step>
                                        <h2 class="text-center fs-4 text-black mb-5 mx-1 mx-md-4 mt-4">Other Information</h2>
                                        <div class="card-body row">
                                            <div class="col-md-4 mb-3">
                                                <label for="sss" class="form-label mb-0 ms-2">SSS # *</label>
                                                <input 
                                                type="text" 
                                                class="form-control" 
                                                id="sss" 
                                                name="sss" 
                                                value="{{$employee['sss']}}"
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
                                                value="{{$employee['pagibig']}}" 
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
                                                value="{{$employee['philHealth']}}"
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
                                                value="{{$employee['tin']}}"
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
                                                value="{{$employee['driversLicense']}}"
                                                oninput="this.value = this.value.replace(/[^0-9]|/g,'')"
                                                minlength="12" 
                                                maxlength="12"
                                                required>
                                                <small data-valid-driversLicense class="valid-feedback">Looks good!</small>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="contactPerson" class="form-label mb-0 ms-2">Contact Person In Case Of Emergency *</label>
                                                <input type="text" class="form-control" id="contactPerson" name="contactPerson" value="{{$employee['contactPerson']}}"
                                                oninput="this.value = this.value.replace(/[^a-z|^A-Z]|/g,'')"
                                                minlength="2" 
                                                maxlength="25"
                                                required>
                                                <small data-valid-contactPerson class="valid-feedback">Looks good!</small>
                                            </div>
                                
                                            <div class="col-md-6 mb-3">
                                                <label for="contactNumber" class="form-label mb-0 ms-2">Contact Number In Case Of Emergency *</label>
                                                <input type="number" class="form-control" id="contactNumber" name="contactNumber" value="{{$employee['contactNumber']}}"
                                                oninput="this.value = this.value.replace(/[^0-9]|/g,'')"
                                                minlength="10" 
                                                maxlength="10"
                                                required>
                                                <small data-valid-contactNumber class="valid-feedback">Looks good!</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 ms-auto pe-5 mb-5 d-flex justify-content-between">
                                    <a class="btn fusebax-btn-outlined" type="button" href="./" >Cancel</a>
                                    <button type="submit" class="btn fusebax-btn">Update</button>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>           
            </form>    
        </div>
    </div>
    <!-- Custom Script -->
    <script src="{{ asset('asset/js/create.js') }}"></script>
</x-layout>