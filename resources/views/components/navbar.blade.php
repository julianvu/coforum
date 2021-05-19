<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
    <div class="container-fluid">
        <a href="{{ route('home') }}" class="navbar-brand">Coforum</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
            </ul>
            <ul class="navbar-nav mb-2 mb-lg-0">
                @auth
                    <li class="nav-item"><a href="{{ route('post-thread') }}" class="nav-link">Post a Thread</a></li>
                    <li class="nav-item"><a href="" class="nav-link">{{ auth()->user()->name }}</a></li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-transparent nav-link d-inline">Log Out</button>
                        </form>
                    </li>
                @endauth
                @guest
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Log In</a></li>
                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
