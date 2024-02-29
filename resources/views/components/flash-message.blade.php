@if(session()->has('message'))
<div class="container position-relative h-25 mt-2 mb-3">
<div aria-live="polite" aria-atomic="true" class="position-absolute top-50 end-0">
    <div class="toast show align-items-center app-success border-0 justify-content-center " role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                {{session('message')}}
            </div>
            <button type="button" class="btn-close btn-secondary me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>
</div>
@endif