<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Fusebax') }}</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <!-- icon -->
        <link rel="icon" type="image/png" href="{{ asset('./asset/images/thunder-bolt-hand-drawn-shape-outline-svgrepo-com.svg')}}">

        <!-- Google font -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/style.css')}}">
        
        <!-- Custom Script -->
        <script src="{{ asset('asset/js/script.js') }}" defer></script>
        
        <!-- Cloudinary -->
        @cloudinaryJS
    </head>
    <body>
        <!-- Header Start -->
        <header class="main-header position-fixed w-100">
            <div class="container">
                <nav class="navbar py-0">
                    <div class="logo">
                        <a class="navbar-brand py-0 me-0" href="/home"><img src="{{asset('./asset/images/fuseboxLogo.svg')}}" alt="brand icon" width="25" height="25" class="img-fluid">
                        <span class="fuse-brand-name">Fusebax</span>
                        </a>
                    </div>                                        
                    <div class="d-flex align-items-center ms-auto">
                        <a class="btn btn-warning fusebax-btn text-capitalize" href="/register">register</a>
                    </div>
                </nav>
            </div>
        </header>
        <!-- Header End  -->

        <!-- Hero Banner Start -->
        <section class="hero-banner position-relative overflow-hidden">
            <div class="container">
                <div class="row d-flex flex-wrap align-items-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="position-relative left-hero-color">
                            <h1 class="mb-0 fw-bold">
                                Empower your organization with simplicity.
                            </h1>
                            <p>Our Employee ID Generator App: where uniqueness meets ease, one ID at a time.</p>
                            <a href="/register" class="btn btn-warning fusebax-btn">
                                <span class="me-2">Get Started</span> 
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="position-relative right-hero-color">
                            
                        </div>          
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Banner End -->        

        <!--- Service section Start -->
        <section class="service position-relative overflow-hidden">
            <div class="container position-relative">
                <img src="{{asset('asset/images/service/dot-shape.png')}}" class="shape position-absolute">
                <div class="row">
                    <div class="col-12"><small class="fs-7 d-block">Working Process</small></div>
                    <div class="col-12 d-xxl-flex d-xl-flex d-lg-flex d-md-flex d-sm-block d-block align-items-center justify-content-xxl-between justify-content-xl-between justify-content-lg-between justify-content-md-between justify-content-sm-between justify-content-sm-center ">
                        <h2 class="fs-2 text-black mb-0">User-friendly meets unique,<br> crafting IDs with ease.</h2>
                        <a href="#" class="btn btn-warning section-btn fusebax-btn">Learn more</a>
                    </div>
                </div>
                <div class="row d-flex flex-wrap justify-content-center step-row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 text-center mb-4">
                        <div class="card border-0 shadow">
                            <div class="card-body">
                                <div class="icon-round overflow-hidden rounded-circle position-relative d-flex align-items-center justify-content-center mx-auto text-center">
                                    <i class="fa-solid fa-download text-primary position-relative"></i>
                                </div>
                                <h5 class="mb-0 fw-500">Step 1</h5>
                                <h3 class="fs-4">Go to fusebax website</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 text-center mb-4">
                        <div class="card border-0 shadow">
                            <div class="card-body">
                                <div class="icon-round overflow-hidden rounded-circle position-relative d-flex align-items-center justify-content-center mx-auto text-center">
                                    <i class="fa-solid fa-user text-primary position-relative"></i>
                                </div>
                                <h5 class="mb-0 fw-500">Step 2</h5>
                                <h3 class="fs-4">Create a free Account</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 text-center mb-4">
                        <div class="card border-0 shadow">
                            <div class="card-body">
                                <div class="icon-round overflow-hidden rounded-circle position-relative d-flex align-items-center justify-content-center mx-auto text-center">
                                    <i class="fa-solid fa-gift text-primary position-relative"></i>
                                </div>
                                <h5 class="mb-0 fw-500">Step 3</h5>
                                <h3 class="fs-4">Now Start your Journey</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service section Start -->

        <!--App Service section Start -->
        <section class="our-service position-relative overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-8 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <img src="{{asset('asset/images/our-service/our-service.svg')}}" class="img-fluid"> 
                    </div>
                    <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ps-xxl-0 ps-xl-0 ps-lg-3 ps-md-3 ps-sm-3 ps-3">
                        <small class="fs-7 d-block">App Service</small>
                        <h2 class="fs-2 text-black mb-0">App Featured Service that We Provide</h2>
                        <p class="mb-0 fw-500 fs-7">
                            An Employee ID generator is a tool that streamlines the process of assigning unique identification numbers to individuals within an organization. It enhances efficiency, accuracy, and security in managing employee information.
                        </p>
                        <ul class="list-unstyled mb-0 pl-0">
                            <li class="d-flex flex-wrap align-items-start">
                                <i class="fa-solid fa-circle-check fs-4 pe-2"></i>
                                <span class="fs-7 text-black">Uniqueness and Security</span>
                            </li>
                            <li class="d-flex flex-wrap align-items-start">
                                <i class="fa-solid fa-circle-check fs-4 pe-2"></i>
                                <span class="fs-7 text-black">Automation ensures consistency in the format and avoids manual mistakes in assigning IDs</span>
                            </li>
                            <li class="d-flex flex-wrap align-items-start">
                                <i class="fa-solid fa-circle-check fs-4 pe-2"></i>
                                <span class="fs-7 text-black">Printable</span>
                            </li>
                            <li class="d-flex flex-wrap align-items-start">
                                <i class="fa-solid fa-circle-check fs-4 pe-2"></i>
                                <span class="fs-7 text-black">Reset and Reassignment: In cases where an employee leaves the organization and a new person fills the position.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--App Service section End -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container">
                <div class="copyrights text-center blue-light  fw-500">
                    <span>&copy - All Rights Reserved @ </span>
                    <span id="autodate">2024</span> 
                </div>
            </div>
        </footer>
        <!-- Footer End  -->

        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
