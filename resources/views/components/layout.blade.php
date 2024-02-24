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
        
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('./asset/css/style.css')}}">
    </head>
    <body>
        <!-- Header | Appbar -->
        <x-header />
        
        <!-- Flash Message -->
        <x-flash-message />

        <!-- Main  -->
        <div class="container-fluid d-flex fusebax-main-container p-0">    
            <!-- Sidebar -->
            <x-sidebar />
            
            <!-- Content Goes Here -->
            {{$slot}}
        </div>

        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
