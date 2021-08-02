<div class="logo-menu">
    <nav class="navbar navbar-default main-navigation" role="navigation" data-spy="affix" data-offset-top="50">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" href="{{ route('index') }}">
                    {{-- <img src="assets/img/logo.png" alt=""> --}}
                    Logo
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar">

                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ route('index') }}">
                            Home 
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right float-right">
                    <li class="left"><a href="{{ route('postad') }}"><i class="ti-pencil-alt"></i> Post Ad</a></li>
                    <li class="right"><a href="{{ route('login') }}"><i class="ti-lock"></i> Log In</a></li>
                    <li class="right"><a href="{{ route('register') }}"><i class="ti-lock"></i>Register</a></li>
                </ul>
            </div>
        </div>

        <ul class="wpb-mobile-menu">
            <li>
                <a href="{{ route('index') }}">Home</a>
            </li>
            <li class="btn-m"><a href="{{ route('postad') }}"><i class="ti-pencil-alt"></i> Post Ad</a></li>
            <li class="btn-m"><a href="{{ route('register') }}"><i class="ti-lock"></i>Register</a></li>
            <li class="btn-m"><a class="active" href="{{ route('login') }}"><i class="ti-lock"></i> Log In</a></li>
        </ul>

    </nav>
</div>
