@extends('parent')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="login-box">
                <h1 class="page-title"># Register</h1>
                <form autocomplete="off" class="form" method="post" action="{{ route('register') }}" name="login">
                    @csrf
                    
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Name *" required class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                            <span class="invalid-feedback alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
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
                        @error('password')
                            <span class="invalid-feedback alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" name="password_confirmation" placeholder="Repeat password *" required class="form-control @error('password_confirmation') is-invalid @enderror" />
                        @error('password_confirmation')
                            <span class="invalid-feedback alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control">Register</button>
                    </div>
                </form>
                <p>Have an account yet? <a href="/" class="href-underline">login</a></p>
            </div>
        </div>
    </div>
@endsection
