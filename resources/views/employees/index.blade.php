<x-layout>
    <!-- Search -->
    <section class="container fusebax-main">
        <div class="container mb-4">
            <form action="/">
                <div class="d-flex gap-1">
                    <input type="text" name="search" class="form-control" id="formGroupExampleInput" placeholder="search">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>
        </div>
        <!-- End Search -->

        <div class="card pt-3 pb-4">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID Number</th>
                        <th scope="col">Firstname</th>
                        <th scope="col">Middlename</th>
                        <th scope="col">Lastname</th>
                        <th scope="col">Job Position</th>
                        <th scope="col">View</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                    <tr>
                        <!-- tap or click ID# to trigger modal -->
                        <th scope="row" type="button" data-bs-toggle="modal" data-bs-target="#myModal{{$employee['id']}}">AMS-{{$employee['id']}}</th>
                        <td>{{$employee['firstname']}}</td>
                        <td>{{$employee['middlename']}}</td>
                        <td>{{$employee['lastname']}}</td>                   
                        <td>{{$employee['jobPosition']}}</td>
                        <td><a href="./employees/{{$employee['id']}}"> ID</a></td>
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
                                <div class="modal-body">
                                    <p class="fw-light">Mobile Number: {{$employee['mobileNumber']}}</p>
                                    <p class="fw-light">SSS: {{$employee['sss']}}</p>
                                    <p class="fw-light">Pag-ibig: {{$employee['pagibig']}}</p>
                                    <p class="fw-light">PhilHealth: {{$employee['philHealth']}}</p>
                                    <p class="fw-light">TIN: {{$employee['tin']}}</p>
                                    <p class="fw-light">Drivers Lisence: {{$employee['driversLisence']}}</p>
                                    <p class="fw-light">Contact Person: {{$employee['contactPerson']}}</p>
                                    <p class="fw-light">Contact number: {{$employee['contactNumber']}}</p>
                                    <p class="fw-light">Address: {{$employee['address']}}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-5">{{$employees->links()}}</div>    
    </section>
</x-layout>