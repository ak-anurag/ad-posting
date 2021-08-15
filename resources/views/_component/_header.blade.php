<header id="Header">
    <div class="container">
        <nav class="navbar navbar-expand-lg header-navbar">
            <div class="navbar-brand"><a href="/"><img src="{{asset('assets/logo.png')}}" alt="logo" class="img-fluid"></a>
            </div>
            <button class="navbar-toggler icon" type="button" data-toggle="collapse" data-target="#HeaderMenu"
                aria-controls="HeaderMenu" aria-expanded="false" aria-label="Toggle navigation">
                <div class="toggler-icon"></div>
                <div class="toggler-icon"></div>
                <div class="toggler-icon"></div>
            </button>
            <div class="collapse navbar-collapse" id="HeaderMenu">
                <ul class="navbar-nav ml-auto">
                    <button class="navbar-toggler close" type="button" data-toggle="collapse"
                        data-target="#HeaderMenu" aria-controls="HeaderMenu" aria-expanded="false"
                        aria-label="Toggle navigation"><svg viewBox="0 0 16 16"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M11.854 4.146a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708-.708l7-7a.5.5 0 0 1 .708 0z">
                            </path>
                            <path fill-rule="evenodd"
                                d="M4.146 4.146a.5.5 0 0 0 0 .708l7 7a.5.5 0 0 0 .708-.708l-7-7a.5.5 0 0 0-.708 0z">
                            </path>
                        </svg></button>
                    @auth
                        <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">My Account</a></li>
                    @endauth

                    @guest
                        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                        <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                    @endguest
                    <li class="nav-item"><a href="{{ route('postad') }}" class="nav-link post-ad">Post Free Ad</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>