@extends('parent')

@section('content')
    <div class="page-header" style="background: url(assets/img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Registration</h2>
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="ti-home"></i> Home</a></li>
                            <li class="current">Registration</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="content" class="my-account">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-6 cd-user-modal">
                    <div class="my-account-form">
                        {{-- <ul class="cd-switcher">
                            <li><a href="#0">REGITER</a></li>
                        </ul> --}}
                        <div id="cd-signup" class="is-selected">
                            <div class="page-login-form register">
                                <form action="{{ route('register') }}" method="POST" role="form" class="login-form">
                                    @csrf

                                    <div class="form-group">
                                        <div class="input-icon">
                                            <i class="ti-email"></i>
                                            <input type="text" id="sender-email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email">

                                            @error('email')
                                                <span class="is-invalid">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-icon">
                                            <i class="ti-mobile"></i>
                                            <input type="text" id="sender-phone" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Phone">
                                            
                                            @error('phone')
                                                <span class="is-invalid">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-icon">
                                            <i class="ti-lock"></i>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">

                                            @error('password')
                                                <span class="is-invalid">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-icon">
                                            <i class="ti-lock"></i>
                                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="Repeat Password">

                                            @error('password_confirmation')
                                                <span class="is-invalid">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <button class="btn btn-common log-btn">Register</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
