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
                        <a class="navbar-brand py-0 me-0" href="/home"><img src="{{asset('./asset/images/thunder-bolt-hand-drawn-shape-outline-svgrepo-com.svg')}}" alt="brand icon" width="25" height="25" class="img-fluid">
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
                            <p>Our Employee ID Generator app: where uniqueness meets ease, one ID at a time.</p>
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



        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
