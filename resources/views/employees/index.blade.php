<x-layout>
    <!-- Main  --> 
    <section class="container pt-5">
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
    </section>
</x-layout>