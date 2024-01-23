<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fuse|Dashboard</title>

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
        
        <!-- Main  -->
        <div class="container-fluid d-flex fusebax-main-container p-0">    
            <!-- Sidebar -->
            <aside class="container text-bg-light fusebax-sidebar d-flex flex-column justify-content-between">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">List</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <p class="card-text">Logout</p>
                    </div>
                </div>
                
            </aside>
            <!-- End Sidebar -->
            
            <!-- Main Section -->
            <section class="container fusebax-main">
                <div class="card pt-3 pb-4">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID Number</th>
                                <th scope="col">Firstname</th>
                                <th scope="col">Middlename</th>
                                <th scope="col">Lastname</th>
                                <th scope="col">Job Position</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">AMS-2023-0030</th>
                                <td>John</td>
                                <td>Ngueyen</td>
                                <td>Doe</td>
                                <td>Driver</td>
                            </tr>
                            <tr>
                                <th scope="row">AMS-2023-0043</th>
                                <td>Barry</td>
                                <td>Summer</td>
                                <td>Allen</td>
                                <td>Designer</td>
                            </tr>
                            <tr>
                                <th scope="row">AMS-2023-0011</th>
                                <td>Scot</td>
                                <td>Smith</td>
                                <td>Brown</td>
                                <td>Worker</td>
                            </tr>
                            <tr>
                                <th scope="row">AMS-2023-0024</th>
                                <td>Tony</td>
                                <td>Washington</td>
                                <td>Stark</td>
                                <td>Engineer</td>
                            </tr>
                            <tr>
                                <th scope="row" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">AMS-2023-0011</th>
                                <td>Piper</td>
                                <td>Lang</td>
                                <td>Rogers</td>
                                <td>Project Manager</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- tap or click ID# to trigger modal -->
                

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header">
                            <div>
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Piper L. Rogers</h1>
                                <small class="text-muted">Project Manager</small>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="fw-light">Mobile Number: 0000-000-0000</p>
                            <p class="fw-light">SSS: 0000-0000-0</p>
                            <p class="fw-light">Pag-ibig: 0000-0000-0</p>
                            <p class="fw-light">PhilHealth: 0000-0000-0</p>
                            <p class="fw-light">TIN: 0000-0000-0</p>
                            <p class="fw-light">Drivers Lisence: 0000-0000-0</p>
                            <p class="fw-light">Contact Person: Stephen Strange</p>
                            <p class="fw-light">Contact number: 0000-000-0000</p>
                            <p class="fw-light">Address: Grand centennial commercial bldg. Block 2D, lot 6, adventurine st. Brgy. Magdalo,Kawit Cavite</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                </div>


            </section>
            <!-- End Main Section -->
        </div>

        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
