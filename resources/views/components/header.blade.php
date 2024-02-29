<header class="container position-relative">
    <nav class="navbar fusebax-appbar navbar-expand-lg">
        <div class="container-fluid justify-content-between">
            <a class="navbar-brand" href={{auth()? "/home": "/"}} >
                <img src="{{asset('./asset/images/fuseboxLogo.svg')}}" alt="brand icon" width="30" height="24">
                <span class="fuse-brand-name">Fusebax</span>
            </a>
            @auth
            
            <ul class="navbar-nav align-items-center ms-auto flex-md-row">
                @if(Route::current()->uri() === "/")
                <li class="nav-item me-4 d-none d-md-block">
                    <a href="/employees/create" type="button" class="btn btn-success px-3">
                        <i class="fa-solid fa-user-plus"></i>
                        Add
                    </a>
                </li>
                @endif
                <li class="nav-item dropdown d-none d-md-block">
                    <a class="nav-link dropdown-toggle text-capitalize" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome {{auth()->user()->username}}
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <form method="POST" action="/logout">
                                @csrf
                                <button class="dropdown-item" role="button" type="submit" >
                                    <i class="fa-solid fa-door-closed me-1"></i>
                                    Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
                <li class="nav-item d-md-none">
                    <form method="POST" action="/logout">
                        @csrf
                        <button class="btn nav-link" type="submit" >
                            <i class="fa-solid fa-door-closed me-1"></i>
                            Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
            @else
                
                <ul class="navbar-nav">
                    <li class="nav-item">
                        @if(Route::current()->uri() !== "register")

                    <a href="/register" class="nav-link d-flex align-items-center px-3">
                        <i class="fa-solid fa-user-plus me-2"></i>
                        Register
                    </a>
                    @endif
                    @if(Route::current()->uri() !== "login")
                    <a href="/login" class="nav-link d-flex align-items-center px-3">
                        <i class="fa-solid fa-right-to-bracket me-2"></i>
                        Login
                    </a>
                    @endif
                </li>
            </ul>
        </div>
    </nav>
            @endauth
</header>