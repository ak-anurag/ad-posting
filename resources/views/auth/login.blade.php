@extends('parent')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-5">
            @if (Session::has('fail'))
                <div class="alert alert-danger">
                    <strong>
                        {{ Session::get('fail') }}
                    </strong>
                </div>
            @endif

            <div class="login-box">
                <h1 class="page-title"># Login</h1>
                <form autocomplete="off" class="form" method="post" action="{{ route('login') }}">
                    @csrf
                    
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email *" required class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                            <span class="invalid-feedback alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password *" required class="form-control @error('password') is-invalid @enderror" />
                        @error('email')
                            <span class="invalid-feedback alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control">Login</button>
                    </div>
                </form>
                <p>Don't have an account yet? <a href="/register" class="href-underline">Register</a></p>
            </div>
        </div>
    </div>
@endsection
