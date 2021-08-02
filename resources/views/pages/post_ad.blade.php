@extends('parent')

@section('stylesheet')

    <link rel="stylesheet" href="assets/css/post_style.css">
    <style>
        .form-check-label{
            border: 2px solid rgb(175, 169, 169);
            background-color: rgb(245, 243, 243);
            padding: 7px 20px;
            margin-right: 30px;
        }
        .is-invalid{
            border: 1px solid red;
        }
        .page-ads, .wrapper{
            background-color: rgb(247, 247, 247);
        }
        .form-control{
            /* color:rgb(175, 169, 169); */
            background-color: #fff;
        }
    </style>

@endsection

@section('down_script')

    <script src="assets/js/jquery.steps.js"></script>
    <script src="assets/js/post_main.js"></script>


    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js"
        data-cf-beacon='{"rayId":"676051db3f7a2e47","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.7.0","si":10}'>
    </script>

@endsection

@section('content')

    <section id="content">
        <div class="container">
            @if (Session::has('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
            @endif

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-ads box">
                        <div class="wrapper">
                            <form action="{{ route('postad') }}" method="post" id="wizard">
                                @csrf

                                <section>
                                    <h3>Ad Details</h3>
                                    <div class="form-row">
                                        <div class="form-holder"> 
                                            @error('category')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                            <select name="category" class="form-control @error('category') is-invalid @enderror">
                                                <option disabled selected>Select Category <span class="bold">*</span></option>
                                                <option value="callgirl" {{ old('category') == 'callgirl' ? 'selected' : '' }}>Call Girl</option>
                                                <option value="massages" {{ old('category') == 'massages' ? 'selected' : '' }}>Massages</option>
                                                <option value="male-escorts" {{ old('category') == 'male-escorts' ? 'selected' : '' }}>Male Escorts</option>
                                                <option value="transsexual" {{ old('category') == 'transsexual' ? 'selected' : '' }}>Transsexual</option>
                                                <option value="adult-meetings" {{ old('category') == 'adult-meetings' ? 'selected' : '' }}>Adult Meetings</option>
                                            </select>
                                        </div>
                                        <div class="form-holder">
                                            @error('city')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                            <select name="city" class="form-control @error('city') is-invalid @enderror">
                                                <option disabled selected>Select City <span class="bold">*</span></option>
                                                <option value="{{old('city')}}" {{ old('city') ? 'selected' : '' }}>{{ ucfirst(old('city')) }}</option>
                                                <option value="Good">Good</option>
                                                <option value="Good">Good</option>
                                                <option value="Good">Good</option>
                                                <option value="Good">Good</option>
                                                <option value="Good">Good</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder">
                                            @error('address')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" placeholder="Address" value="{{ old('address') }}">
                                        </div>
                                        <div class="form-holder">
                                            @error('pincode')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                            <input type="text" name="pincode" class="form-control @error('pincode') is-invalid @enderror" placeholder="Pincode" value="{{ old('pincode') }}">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder" style="width: 100%">
                                            @error('district')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                            <input type="text" name="district" class="form-control @error('district') is-invalid @enderror" placeholder="Area/District/Neighbourhood" value="{{ old('district') }}">
                                        </div>
                                    </div>

                                    <h3>Your Data</h3>
                                    <div class="form-row">
                                        <div class="form-holder" style="width: 50%">
                                            @error('age')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                            <input type="text" name="age" class="form-control @error('age') is-invalid @enderror" placeholder="Age" value="{{ old('age') }}">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder" style="width: 100%">
                                            @error('ad_title')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                            <textarea name="ad_title" class="form-control @error('ad_title') is-invalid @enderror" rows="5" placeholder="Give ad title">{{ old('ad_title') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder" style="width: 100%">
                                            @error('ad_description')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                            <textarea name="ad_description" class="form-control @error('ad_description') is-invalid @enderror" rows="5" placeholder="Use this space to describe yourself, your body, talk about your skills, what you like...">{{ old('ad_description') }}</textarea>
                                        </div>
                                    </div>

                                    <h3>Your contacts</h3>
                                    <p class="mb-3" style="font-family: sans-serif; font-size: 16px; font-weight: 700">How would you like to be contacted?</p>
                                    <div class="form-row">
                                        <div class="form-holder" style="width: 100%">
                                            @error('contacted_type')
                                                <div class="is-invalid">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <div class="form-holder custom-control custom-radio" style="width: 100%;">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input @error('contacted_type') is-invalid @enderror" name="contacted_type" value="phone"> Only Phone
                                                </label>
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input @error('contacted_type') is-invalid @enderror" name="contacted_type" value="both"> Both Email and Phone
                                                </label>
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input @error('contacted_type') is-invalid @enderror" name="contacted_type" value="email"> Only Email
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder" style="width:100%">
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" value="{{ old('email') }}"> 
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder">
                                            @error('phone')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone Number" value="{{ old('phone') }}">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input @error('whatsapp') is-invalid @enderror" name="whatsapp"> Contact on Whatsapp
                                        </label>
                                    </div>
                                    <div class="form-row">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </section>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
