<x-layout>
    <!-- Main  --> 
    <section class="container py-5">
        <table id="fusebaxDB" class="table table-striped w-100">
            <thead>
                <tr>
                    <th scope="col" class="d-none d-md-flex">ID Number</th>
                    <th scope="col" class="d-sm-block d-md-none">#</th>
                    <th scope="col">Name</th>
                    <th scope="col" class="d-none d-md-flex"><span>Job Position</span></th>
                    <th scope="col"><span class="d-flex p-0 m-0">View</span></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                
                <tr>
                    <!-- tap or click ID# to trigger modal -->
                    <th>
                        <span class="w-100" type="button" data-bs-toggle="modal" data-bs-target="#myModal{{$employee['id']}}">
                            AMS-0240{{$employee['id']}}
                        </span>
                    </th>
                    <td>{{$employee['firstname'] . " " .$employee['lastname']}}</td>
                    <td class="d-none d-md-block">{{$employee['jobPosition']}}</td>
                    <td><a href="./employees/{{$employee['id']}}"><i class="fa-regular fa-id-card mx-auto d-flex"></i></a></td>
                    <td class="d-none"></td>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal{{$employee['id']}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-header">
                                <div>
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{$employee['firstname']}} {{$employee['lastname']}}</h1>
                                    <small class="text-muted">{{$employee['jobPosition']}}</small>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body d-flex gap-3 justify-content-center">
                                <div class="container fusebax-idFrontView fusebax-id-canvas d-none d-md-block">
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
                                <div class="container fusebax-idBackView fusebax-id-canvas d-none d-md-block">
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
                            <div class="modal-footer">
                                <button type="button" class="btn fusebax-btn" data-bs-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </tr>
                @endforeach
                <tr>
                    <td>61</td>
                    <td>Brielle Williamson</td>
                    <td>Integration Specialist</td>
                    <td>New York</td>
                    <td class="d-none"></td>
                </tr>
                <tr>
                    <td>61</td>
                    <td>Brielle Williamson</td>
                    <td>Integration Specialist</td>
                    <td>New York</td>
                    <td class="d-none"></td>
                </tr>
                <tr>
                    <td>61</td>
                    <td>Brielle Williamson</td>
                    <td>Integration Specialist</td>
                    <td>New York</td>
                    <td class="d-none"></td>
                </tr>
                <tr>
                    <td>61</td>
                    <td>Brielle Williamson</td>
                    <td>Integration Specialist</td>
                    <td>New York</td>
                    <td class="d-none"></td>
                </tr>
                <tr>
                    <td>61</td>
                    <td>Brielle Williamson</td>
                    <td>Integration Specialist</td>
                    <td>New York</td>
                    <td class="d-none"></td>
                </tr>
                <tr>
                    <td>61</td>
                    <td>Brielle Williamson</td>
                    <td>Integration Specialist</td>
                    <td>New York</td>
                    <td class="d-none"></td>
                </tr>
                <tr>
                    <td>61</td>
                    <td>Brielle Williamson</td>
                    <td>Integration Specialist</td>
                    <td>New York</td>
                    <td class="d-none"></td>
                </tr>
                <tr>
                    <td>61</td>
                    <td>Brielle Williamson</td>
                    <td>Integration Specialist</td>
                    <td>New York</td>
                    <td class="d-none"></td>
                </tr>
                <tr>
                    <td>61</td>
                    <td>Brielle Williamson</td>
                    <td>Integration Specialist</td>
                    <td>New York</td>
                    <td class="d-none"></td>
                </tr>
                <tr>
                    <td>61</td>
                    <td>Brielle Williamson</td>
                    <td>Integration Specialist</td>
                    <td>New York</td>
                    <td class="d-none"></td>
                </tr>
                <tr>
                    <td>61</td>
                    <td>Brielle Williamson</td>
                    <td>Integration Specialist</td>
                    <td>New York</td>
                    <td class="d-none"></td>
                </tr>
                
            </tbody>
        </table>
    </section>
</x-layout>