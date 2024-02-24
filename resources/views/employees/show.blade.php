<x-layout>
    <div class="mx-auto mt-3 pt-2 h-75">
        <div class="container-fluid d-flex justify-content-center py-5 gap-5">
            <!-- 3.375” x 2.125“ Standard ID size -->
            <div class="container fusebax-idFrontView fusebax-id-canvas">
                <div class="container fusebax-idHeader">
                    <img class="fusebax-company-logo" src="{{asset('./asset/images/AMS_logo.jpg')}}" alt="company logo">
                    <p class="fusebax-company-logo-text" >Airvent Mechanical System Inc</p>
                    <p class="fusebax-company-address-text">Block 2D, Lot 6, Adventurine St. 3rd Floor Yading Bldg.</p>
                    <p class="fusebax-company-address-text">Grand Centennial Commercial Bgy. Magdalo ,Kawit Cavite</p>
                </div>
                <div class="container d-flex h-75 px-0">
                    <div class="container fusebax-employeeInfo-container">
                        <img class="fusebax-employee-signature" src="{{asset('./asset/images/employeeSignature.png')}}" alt="qr code image">
                        <p class="fusebax-employee-name">{{ $employee['firstname'] . ' ' . $employee['lastname']}} </p>
                        <p class="fusebax-employee-jobPosition">{{$employee['jobPosition']}}</p>
                        <img class="fusebax-qr-code" src="{{asset('./asset/images/qrCode.png')}}" alt="qr code image"/>
                    </div>
                    <img 
                        class="fusebax-employee-photo" 
                        src="{{$employee['employeeImagePath']? $employee['employeeImagePath'] : asset('./asset/images/imageHere.png')}}" 
                        alt="photo of employee"/>
    
                    <div class="container position-absolute bottom-0 end-0 pb-3 text-center">
                        <p class="fusebax-employee-number">AMS-{{$employee['id']}}</p>
                    </div>
                </div>
            </div>
    
            <div class="container fusebax-idBackView fusebax-id-canvas">
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
                
                <div class="container fusebax-backview-containerinfo mx-auto text-center py-3">
                    <div class="w-25 mx-auto pt-3">
                        <p class="fusebax-chairman-text">Alex Li</p>
                        <hr class="m-0">
                        <p class="fusebax-paragraph-text2">Chairman</p>
                    </div>
                </div>
    
            </div>
        </div>
        <div class="container d-flex gap-3">
            <a href="/employees/{{$employee['id']}}/edit" class="btn btn-warning py-2 px-4 text-white">Edit</a>

            <form method="POST" action="/employees/{{$employee['id']}}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger py-2 px-4 text-white">delete</button>
            </form>
        </div>
    </div>
</x-layout>