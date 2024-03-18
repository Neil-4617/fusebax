<x-layout>
    <section class="main-container">
        <div class="container px-4">
            <div class="row pb-3">
                <div class="details-container col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <h1 class="fs-3 fw-semibold">
                        {{$employee['firstname'] . ' ' . $employee['lastname']}}
                    </h1>
                    <p class="fs-6 m-0 p-0">{{ "AMS-0240" . $employee['id'] . " " . $employee['jobPosition']}}</p> 
                    <p class="fs-6 m-0 p-0">{{$employee['email']}}</p>
                    <p class="fs-6 m-0 p-0">+63{{ $employee['mobileNumber'] }}</p>
                    <div class="card mb-3">
                        <div class="card-body">
                            <p class="card-text fs-6 mb-1 p-0">
                                Birthday
                                <span class="text-black ms-2">
                                    {{$employee['birthday']}}
                                </span>
                            </p>

                            <div class="d-flex gap-1">
                                <p class="card-text fs-6 mb-1 p-0">
                                    Address
                                    <span class="text-black ms-2">{{ $employee['adressHouseNumber'] }}</span>
                                    <span class="text-black text-capitalize">{{ $employee['adressStreet'] }}</span>
                                </p>
                            </div>
                            <p class="card-text fs-6 m-0 p-0 text-black text-capitalize">{{ $employee['addressLine2'] }}</p>
                            
                            <div class="d-flex gap-1">
                                <p class="card-text fs-6 m-0 p-0 text-black text-capitalize">{{ $employee['addressCity'] }}</p>
                                <p class="card-text fs-6 m-0 p-0 text-black text-capitalize">{{ $employee['addressProvince'] }}</p>
                                <p class="card-text fs-6 m-0 p-0 text-black text-capitalize">{{ $employee['addressCountry'] }}</p>
                                <p class="card-text fs-6 m-0 p-0 text-black text-capitalize">{{ $employee['addressZipCode'] }}</p>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <p class="card-text fs-6 mb-1 p-0">
                                        Date Hired
                                        <span class="text-black ms-2">
                                            {{$employee['dateHired']}}
                                        </span>
                                    </p>
                                    <p class="card-text fs-6 mb-1 p-0">
                                        Gender
                                        <span class="text-black ms-2">
                                            {{$employee['gender']}}
                                        </span>
                                    </p>
                                    <p class="card-text fs-6 mb-1 p-0">
                                        SSS
                                        <span class="text-black ms-2">
                                            {{$employee['sss']}}
                                        </span>
                                    </p>
                                    <p class="card-text fs-6 mb-1 p-0">
                                        Pag-ibig
                                    <span class="text-black ms-2">
                                        {{$employee['pagibig']}}
                                    </span>
                                    </p>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <p class="card-text fs-6 mb-1 p-0">
                                        PhilHealth
                                        <span class="text-black ms-2">
                                            {{$employee['philHealth']}}
                                        </span>
                                    </p>
                                    <p class="card-text fs-6 mb-1 p-0">
                                        TIN
                                        <span class="text-black ms-2">
                                            {{$employee['tin']}}
                                        </span>
                                    </p>
                                    <p class="card-text fs-6 mb-1 p-0">
                                        Driver's Lisence
                                        <span class="text-black">
                                            {{$employee['driversLicense']}}
                                        </span>
                                    </p>
                                </div>
                            </div>
                            
                            <hr/>                
                            <p class="card-text fs-6 mb-0 p-0">Contact person in case of emergency</p>
                            <p class="card-text fs-6 mb-0 p-0 text-capitalize">
                                Name 
                                <span class="text-black ms-2">
                                    {{$employee['contactPerson']}}
                                </span>
                            </p>
                            <p class="card-text fs-6 mb-0 p-0">
                                Contact Number
                                <span class="text-black ms-2">
                                    {{$employee['contactNumber']}}
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="container d-flex gap-3 pt-3 mb-5">
                        <a href="/employees/{{$employee['id']}}/edit" class="btn fusebax-btn">
                            <i class="fa-solid fa-pen"></i>
                            Edit
                        </a>

                        <form method="POST" action="/employees/{{$employee['id']}}">
                            @csrf
                            @method('DELETE')
                            <button class="btn fusebax-btn-outlined">
                                <i class="fa-solid fa-trash"></i>
                                delete
                            </button>
                        </form>
                    </div>
                </div>

                <!-- 3.375” x 2.125“ Standard ID size -->
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="id-card-container">
                        <div class="row">
                            <div class="col-md-6 mb-sm-3 px-0 mx-0">
                                <div id="front-id-container" class="container fusebax-idFrontView fusebax-id-canvas mx-sm-auto">
                                    <div class="container fusebax-idHeader">
                                        <img class="fusebax-company-logo" src="{{asset('asset/images/companyID/amsLogo.jpg
                                            ')}}" alt="company logo">
                                        <p class="fusebax-company-logo-text" >Airvent Mechanical System Inc</p>
                                        <p class="fusebax-company-address-text">Block 2D, Lot 6, Adventurine St. 3rd Floor Yading Bldg.</p>
                                        <p class="fusebax-company-address-text">Grand Centennial Commercial Bgy. Magdalo ,Kawit Cavite</p>
                                    </div>
                                    <div class="container d-flex h-75 px-0">
                                        <div class="container fusebax-employeeInfo-container">
                                            <img class="fusebax-signature" src="{{asset('asset/images/companyID/amsEmployeeSignature.png')}}" alt="signature">
                                            <p class="fusebax-employee-name">{{ $employee['firstname'] . ' ' . $employee['lastname']}}</p>
                                            <p class="fusebax-employee-jobPosition">{{$employee['jobPosition']}}</p>
                                            <img class="fusebax-qr-code" src="{{asset('asset/images/companyID/qrCode.png')}}" alt="qr code image"/>
                                        </div>
                                        <img 
                                            class="fusebax-employee-photo" 
                                            src="{{$employee['employeeImagePath']? $employee['employeeImagePath'] : asset('asset/images/companyID/imageHere.png')}}" 
                                            alt="photo of employee"/>

                                        <div class="container position-absolute bottom-0 end-0 pb-3 text-center">
                                            <p class="fusebax-employee-number">AMS-0240{{$employee['id']}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-sm-3 px-0 mx-0">
                                <div id="back-id-container" class="container fusebax-idBackView fusebax-id-canvas mx-sm-auto">
                                    <div class="container fusebax-backview-containerinfo mx-auto mt-2">
                                        <p class="fusebax-title1">Personal Information</p>
                                        <p class="fusebax-paragraph-text">Address: {{$employee['address']}}</p>
                                        <p class="fusebax-paragraph-text">Mobile Number: {{$employee['mobileNumber']}}</p>
                                        <p class="fusebax-paragraph-text">Date Hired: {{$employee['dateHired']}}</p>
                                    </div>
                                    
                                    <div class="container fusebax-backview-containerinfo mx-auto">
                                        <p class="fusebax-title1">Mandatory Number</p>
                                        <p class="fusebax-paragraph-text">SSS: {{$employee['sss']}}</p>
                                        <p class="fusebax-paragraph-text">Pagibig: {{$employee['pagibig']}}</p>
                                        <p class="fusebax-paragraph-text">Philhealth: {{$employee['philHealth']}}</p>
                                        <p class="fusebax-paragraph-text">TIN: {{$employee['tin']}}</p>
                                    </div>

                                    <div class="container fusebax-backview-containerinfo mx-auto">
                                        <p class="fusebax-title2">In case of emergency, please contact</p>
                                        <p class="fusebax-paragraph-text2">{{$employee['contactPerson']}}</p>
                                        <p class="fusebax-paragraph-text2">{{$employee['contactNumber']}}</p>
                                    </div>
                                    
                                    <div class="container fusebax-backview-containerinfo mx-auto mt-2">
                                        <p class="fusebax-paragraph-text">This is to certify that the person whose name and signature appears on this card is an employee of</p>
                                        <p class="fusebax-paragraph-text"><strong>AIRVENT MECHANICAL SYSTEM INC.</strong></p>
                                    </div>
                                    
                                    <div class="container fusebax-backview-containerinfo mx-auto text-center py-2">
                                        <div class="w-25 mx-auto">
                                            <img class="fusebax-signature" src="{{asset('asset/images/companyID/amsAuthorizedSignature.png')}}" alt="Authorized Signature"/>
                                            <p class="fusebax-chairman-text">Alex Li</p>
                                            <hr class="m-0">
                                            <p class="fusebax-paragraph-text2">Chairman</p>
                                        </div>
                                    </div>                            
                                </div>
                            </div>
                            <div class="col-md-12 pt-4 text-center">
                                <button id="print" class="btn fusebax-btn hide-on-print" type="button">
                                    <i class="fa-solid fa-print"></i>
                                    Print
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--
        <section id="hero-banner" class="hero-banner position-relative overflow-hidden pb-sm-0 pb-md-5">
            <div class="container">
                <div class="row d-flex flex-wrap align-items-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 px-5">
                        <div class="position-relative left-hero-color pt-5 m-0">
                            <h1 class="fs-3 fw-semibold">
                                {{$employee['firstname'] . ' ' . $employee['lastname']}}
                            </h1>
                            <p class="fs-6 m-0 p-0">{{ "AMS-0240" . $employee['id'] . " " . $employee['jobPosition']}}</p> 
                            <p class="fs-6 m-0 p-0">{{$employee['email']}}</p>
                            <p class="fs-6 m-0 p-0">+63{{ $employee['mobileNumber'] }}</p>
                            <hr/>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <p class="card-text fs-6 mb-1 p-0">
                                        Birthday
                                        <span class="text-black ms-2">
                                            {{$employee['birthday']}}
                                        </span>
                                    </p>

                                    <div class="d-flex gap-1">
                                        <p class="card-text fs-6 mb-1 p-0">
                                            Address
                                            <span class="text-black ms-2">{{ $employee['adressHouseNumber'] }}</span>
                                            <span class="text-black text-capitalize">{{ $employee['adressStreet'] }}</span>
                                        </p>
                                    </div>
                                    <p class="card-text fs-6 m-0 p-0 text-black text-capitalize">{{ $employee['addressLine2'] }}</p>
                                    
                                    <div class="d-flex gap-1">
                                        <p class="card-text fs-6 m-0 p-0 text-black text-capitalize">{{ $employee['addressCity'] }}</p>
                                        <p class="card-text fs-6 m-0 p-0 text-black text-capitalize">{{ $employee['addressProvince'] }}</p>
                                        <p class="card-text fs-6 m-0 p-0 text-black text-capitalize">{{ $employee['addressCountry'] }}</p>
                                        <p class="card-text fs-6 m-0 p-0 text-black text-capitalize">{{ $employee['addressZipCode'] }}</p>
                                    </div>
                                    <hr/>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <p class="card-text fs-6 mb-1 p-0">
                                                Date Hired
                                                <span class="text-black ms-2">
                                                    {{$employee['dateHired']}}
                                                </span>
                                            </p>
                                            <p class="card-text fs-6 mb-1 p-0">
                                                Gender
                                                <span class="text-black ms-2">
                                                    {{$employee['gender']}}
                                                </span>
                                            </p>
                                            <p class="card-text fs-6 mb-1 p-0">
                                                SSS
                                                <span class="text-black ms-2">
                                                    {{$employee['sss']}}
                                                </span>
                                            </p>
                                            <p class="card-text fs-6 mb-1 p-0">
                                                Pag-ibig
                                            <span class="text-black ms-2">
                                                {{$employee['pagibig']}}
                                            </span>
                                            </p>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <p class="card-text fs-6 mb-1 p-0">
                                                PhilHealth
                                                <span class="text-black ms-2">
                                                    {{$employee['philHealth']}}
                                                </span>
                                            </p>
                                            <p class="card-text fs-6 mb-1 p-0">
                                                TIN
                                                <span class="text-black ms-2">
                                                    {{$employee['tin']}}
                                                </span>
                                            </p>
                                            <p class="card-text fs-6 mb-1 p-0">
                                                Driver's Lisence
                                                <span class="text-black">
                                                    {{$employee['driversLicense']}}
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    
                                    <hr/>                
                                    <p class="card-text fs-6 mb-0 p-0">Contact person in case of emergency</p>
                                    <p class="card-text fs-6 mb-0 p-0 text-capitalize">
                                        Name 
                                        <span class="text-black ms-2">
                                            {{$employee['contactPerson']}}
                                        </span>
                                    </p>
                                    <p class="card-text fs-6 mb-0 p-0">
                                        Contact Number
                                        <span class="text-black ms-2">
                                            {{$employee['contactNumber']}}
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div class="container d-flex gap-3 pt-3">
                                <a href="/employees/{{$employee['id']}}/edit" class="btn fusebax-btn">
                                    <i class="fa-solid fa-pen"></i>
                                    Edit
                                </a>

                                <form method="POST" action="/employees/{{$employee['id']}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn fusebax-btn-outlined">
                                        <i class="fa-solid fa-trash"></i>
                                        delete
                                    </button>
                                </form>
                            </div>
                        </div>         
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 px-5 mb-0 pb-0">
                        <div class="position-relative right-hero-color vh-75 d-flex justify-content-center mb-0 pb-0">
                            <!-- 3.375” x 2.125“ Standard ID size 
                            <div class="position-absolute w-100 h-100">
                                <div id="front-id-container" class="container fusebax-idFrontView fusebax-id-canvas d-none d-md-block">
                                    <div class="container fusebax-idHeader">
                                        <img class="fusebax-company-logo" src="{{asset('asset/images/companyID/amsLogo.jpg
                                            ')}}" alt="company logo">
                                        <p class="fusebax-company-logo-text" >Airvent Mechanical System Inc</p>
                                        <p class="fusebax-company-address-text">Block 2D, Lot 6, Adventurine St. 3rd Floor Yading Bldg.</p>
                                        <p class="fusebax-company-address-text">Grand Centennial Commercial Bgy. Magdalo ,Kawit Cavite</p>
                                    </div>
                                    <div class="container d-flex h-75 px-0">
                                        <div class="container fusebax-employeeInfo-container">
                                            <img class="fusebax-signature" src="{{asset('asset/images/companyID/amsEmployeeSignature.png')}}" alt="signature">
                                            <p class="fusebax-employee-name">{{ $employee['firstname'] . ' ' . $employee['lastname']}}</p>
                                            <p class="fusebax-employee-jobPosition">{{$employee['jobPosition']}}</p>
                                            <img class="fusebax-qr-code" src="{{asset('asset/images/companyID/qrCode.png')}}" alt="qr code image"/>
                                        </div>
                                        <img 
                                            class="fusebax-employee-photo" 
                                            src="{{$employee['employeeImagePath']? $employee['employeeImagePath'] : asset('asset/images/companyID/imageHere.png')}}" 
                                            alt="photo of employee"/>
                        
                                        <div class="container position-absolute bottom-0 end-0 pb-3 text-center">
                                            <p class="fusebax-employee-number">AMS-0240{{$employee['id']}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                            <div id="back-id-container" class="container fusebax-idBackView fusebax-id-canvas d-none d-md-block mx-auto mt-5">
                                <div class="container fusebax-backview-containerinfo mx-auto mt-2">
                                    <p class="fusebax-title1">Personal Information</p>
                                    <p class="fusebax-paragraph-text">Address: {{$employee['address']}}</p>
                                    <p class="fusebax-paragraph-text">Mobile Number: {{$employee['mobileNumber']}}</p>
                                    <p class="fusebax-paragraph-text">Date Hired: {{$employee['dateHired']}}</p>
                                </div>
                                
                                <div class="container fusebax-backview-containerinfo mx-auto">
                                    <p class="fusebax-title1">Mandatory Number</p>
                                    <p class="fusebax-paragraph-text">SSS: {{$employee['sss']}}</p>
                                    <p class="fusebax-paragraph-text">Pagibig: {{$employee['pagibig']}}</p>
                                    <p class="fusebax-paragraph-text">Philhealth: {{$employee['philHealth']}}</p>
                                    <p class="fusebax-paragraph-text">TIN: {{$employee['tin']}}</p>
                                </div>
                    
                                <div class="container fusebax-backview-containerinfo mx-auto">
                                    <p class="fusebax-title2">In case of emergency, please contact</p>
                                    <p class="fusebax-paragraph-text2">{{$employee['contactPerson']}}</p>
                                    <p class="fusebax-paragraph-text2">{{$employee['contactNumber']}}</p>
                                </div>
                                
                                <div class="container fusebax-backview-containerinfo mx-auto mt-2">
                                    <p class="fusebax-paragraph-text">This is to certify that the person whose name and signature appears on this card is an employee of</p>
                                    <p class="fusebax-paragraph-text"><strong>AIRVENT MECHANICAL SYSTEM INC.</strong></p>
                                </div>
                                
                                <div class="container fusebax-backview-containerinfo mx-auto text-center py-2">
                                    <div class="w-25 mx-auto">
                                        <img class="fusebax-signature" src="{{asset('asset/images/companyID/amsAuthorizedSignature.png')}}" alt="Authorized Signature"/>
                                        <p class="fusebax-chairman-text">Alex Li</p>
                                        <hr class="m-0">
                                        <p class="fusebax-paragraph-text2">Chairman</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    -->
    <!-- Custom Script -->
    <script src="{{ asset('asset/js/show.js') }}"></script>
</x-layout>