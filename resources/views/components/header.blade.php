<div class="navbar bg-light fusebax-appbar navbar-expand-lg justify-content-between">
    <div class="container justify-content-start">
        <a class="navbar-brand" href={{auth()? "/home": "/"}} >
            <img src="{{asset('./asset/images/thunder-bolt-hand-drawn-shape-outline-svgrepo-com.svg')}}" alt="brand icon" width="30" height="24">
            <span class="fuse-brand-name">Fusebax</span>
        </a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            @auth
            <li class="nav-item">
                <span>Welcome {{auth()->user()->username}}</span>
            </li>
            <li class="nav-item">
                <form method="POST" action="/logout">
                    @csrf
                    <button class="btn" type="submit" >
                        <i class="fa-solid fa-door-closed"></i>
                        Logout
                    </button>
                </form>
            </li>
            
            @else
            <li class="nav-item">
                
                <a class="nav-link" aria-current="page" href="/register">
                    <i class="fa-solid fa-user-plus"></i>
                    Register
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/login">
                    <i class="fa-solid fa-right-to-bracket"></i>
                    Login
                </a>
            </li>   
            @endauth
        </ul>
    </div>
</div>

