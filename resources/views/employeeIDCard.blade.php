<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fuse|CardPreview</title>

        <!-- icon -->
        <link rel="icon" type="image/png" href="{{ asset('./asset/images/thunder-bolt-hand-drawn-shape-outline-svgrepo-com.svg')}}">

        <!-- Google font -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('./asset/css/style.css')}}">
    </head>
<body>
    <!-- Header | Appbar -->
    <div class="navbar bg-light fusebax-appbar">
        <div class="container justify-content-start">
            <a class="navbar-brand" href="#">
                <img src="{{asset('./asset/images/thunder-bolt-hand-drawn-shape-outline-svgrepo-com.svg')}}" alt="brand icon" width="30" height="24">
            </a>
            <h1 class="fuse-brand-name">Fusebax</h1>
        </div>
    </div>
    <!-- End Header -->


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
                    <p class="fusebax-employee-name">Stephen Strange</p>
                    <p class="fusebax-employee-jobPosition">Executive Secretary</p>
                    <img class="fusebax-qr-code" src="{{asset('./asset/images/qrCode.png')}}" alt="qr code image">
                </div>
                <img class="fusebax-employee-photo"  src="{{asset('./asset/images/imageHere.png')}}" alt="photo of employee">
                <div class="container position-absolute bottom-0 end-0 pb-3 text-center">
                    <p class="fusebax-employee-number">AMS-2023-0030</p>
                </div>
            </div>
        </div>
        <div class="container fusebax-idBackView fusebax-id-canvas">
            <div class="container fusebax-backview-containerinfo mx-auto mt-2">
                <p class="fusebax-title1">Personal Information</p>
                <p class="fusebax-paragraph-text">Address: 922 Baker Street N.Y Bgy. Naglao, Kawit Cavite</p>
                <p class="fusebax-paragraph-text">Mobile Number: 09987654321</p>
                <p class="fusebax-paragraph-text">Date Hired: Nov. 13, 2023</p>
            </div>
            
            <div class="container fusebax-backview-containerinfo mx-auto">
                <p class="fusebax-title1">Mandatory Number</p>
                <p class="fusebax-paragraph-text">SSS: 000-0000-0000</p>
                <p class="fusebax-paragraph-text">Pagibig: 000-0000-0000</p>
                <p class="fusebax-paragraph-text">Philhealth: 000-0000-0000</p>
                <p class="fusebax-paragraph-text">TIN: 000-0000-0000</p>
            </div>

            <div class="container fusebax-backview-containerinfo mx-auto">
                <p class="fusebax-title2">In case of emergency, please contact</p>
                <p class="fusebax-paragraph-text2">Scott Lang</p>
                <p class="fusebax-paragraph-text2">09987654321</p>
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

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>