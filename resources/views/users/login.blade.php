<x-layout>
    <section class="py-5" style="background-color: #eee;">
        <div class="container h-100 pb-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                    <h2 class="text-center fs-2 text-black mb-5 mx-1 mx-md-4 mt-4">Login</h2>
                                    <form class="mx-1 mx-md-4" method="POST" action="/users/authenticate" novalidate>
                                        @csrf
                                        
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-2 mb-4 fa-fw fs-4"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="email" id="email" name="email" value="{{old('email')}}" class="form-control" />
                                                <label class="form-label" for="email">Your Email</label>
                                                @error('email')
                                                    <small class="small text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-2 mb-4 fa-fw fs-4"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="password" name="password" value="{{old('password')}}" class="form-control" />
                                                <label class="form-label" for="password">Password</label>
                                                @error('password')
                                                    <small class="small text-danger">{{$message}}</small>
                                                @enderror    
                                            </div>
                                        </div>
                                        
                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" class="btn fusebax-btn">
                                                Sign In
                                                <i class="fa-solid fa-right-to-bracket ms-2"></i>
                                            </button>
                                        </div>

                                        <div class="form-check d-flex justify-content-center mb-5">
                                            <small class="text-secondary">
                                                Don't have an account?
                                                <a href="/register" class="text-reset">Register</a>
                                            </small>    
                                        </div>               
                                    </form>
                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>