@extends('parent')

@section('content')
    <div id="content" class="my-account">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-6 cd-user-modal">
                    <div class="my-account-form">
                        {{-- <ul class="cd-switcher">
                            <li><a class="selected" href="#0">LOGIN</a></li>
                        </ul> --}}

                        <div id="cd-login" class="is-selected">
                            <div class="page-login-form">
                                <form action="{{ route('login') }}" method="POST" role="form" class="login-form">
                                    @csrf

                                    <div class="form-group">
                                        <div class="input-icon">
                                            <i class="ti-user"></i>
                                            <input type="text" id="sender-email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email">
                                            @error('email')
                                                <span class="is-invalid">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-icon">
                                            <i class="ti-lock"></i>
                                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                                            @error('password')
                                                <span class="is-invalid">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <button class="btn btn-common log-btn">Login</button>
                                    <div class="checkbox-item">
                                        <div class="checkbox">
                                            <label for="remember" class="rememberme">
                                                <input name="remember" id="remember" value="forever" type="checkbox">
                                                Remember Me</label>
                                        </div>
                                        <p class="cd-form-bottom-message"><a href="#0">Lost your password?</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="page-login-form" id="cd-reset-password">
                            <p class="cd-form-message">Lost your password? Please enter your email address. You will
                                receive a link to create a new password.</p>
                            <form class="cd-form">
                                <div class="form-group">
                                    <div class="input-icon">
                                        <i class="ti-email"></i>
                                        <input type="text" id="sender-email" class="form-control" name="email"
                                            placeholder="Email">
                                    </div>
                                </div>
                                <p class="fieldset">
                                    <button class="btn btn-common log-btn" type="submit">Reset password</button>
                                </p>
                            </form>
                            <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
