@extends('parent')

@section('stylesheet')
    <style>
        .page-ads{
            padding: 10px 30px;
            background-color: rgb(241, 241, 241);
        }
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
    <script>
        // $(document).ready(function(){
        //     $('#contact_type_phone').on('click', function(){  
        //         console.log('1');
        //         $('#contact_field_email').attr('disabled', 'true');
        //         $('#contact_field_phone').removeAttr('disabled');
        //     });

        //     $('#contact_type_email').on('click', function (){  
        //         console.log('2');
        //         $('#contact_field_phone').attr('disabled', 'true');
        //         $('#contact_field_email').removeAttr('disabled', 'false');
        //     });

        //     $('#contact_type_both').on('click', function (){  
        //         console.log('3');
        //         $('#contact_field_phone').removeAttr('disabled');
        //         $('#contact_field_email').removeAttr('disabled');
        //     });
        // });
    </script>
@endsection

@section('content')

    <section id="content">
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
                                <div class="form-row mb-3">
                                    <div class="form-holder mr-3"> 
                                        <select name="category" class="form-control @error('category') is-invalid @enderror">
                                            <option disabled selected>Select Category <span class="bold">*</span></option>
                                            <option value="callgirl" {{ old('category') == 'callgirl' ? 'selected' : '' }}>Call Girl</option>
                                            <option value="massages" {{ old('category') == 'massages' ? 'selected' : '' }}>Massages</option>
                                            <option value="male-escorts" {{ old('category') == 'male-escorts' ? 'selected' : '' }}>Male Escorts</option>
                                            <option value="transsexual" {{ old('category') == 'transsexual' ? 'selected' : '' }}>Transsexual</option>
                                            <option value="adult-meetings" {{ old('category') == 'adult-meetings' ? 'selected' : '' }}>Adult Meetings</option>
                                        </select>
                                        @error('category')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-holder">
                                        <select name="city" class="form-control @error('city') is-invalid @enderror">
                                            @if (old('city') != '')
                                                <option value="{{old('city')}}" {{ old('city') ? 'selected' : '' }}>{{ ucfirst(old('city')) }}</option>
                                            @else                                                
                                                <option disabled selected>Select City <span class="bold">*</span></option>
                                            @endif
                                            @foreach ($cities as $item)
                                                <option value="{{ $item }}">{{ Str::ucfirst($item) }}</option>
                                            @endforeach
                                        </select>
                                        @error('city')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="form-holder mr-3">
                                        <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" placeholder="Address" value="{{ old('address') }}">
                                        @error('address')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-holder">
                                        <input type="text" name="pincode" class="form-control @error('pincode') is-invalid @enderror" placeholder="Pincode" value="{{ old('pincode') }}">
                                        @error('pincode')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row mb-5">
                                    <div class="form-holder" style="width: 100%">
                                        <input type="text" name="district" class="form-control @error('district') is-invalid @enderror" placeholder="Area/District/Neighbourhood" value="{{ old('district') }}">
                                        @error('district')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <h3>Your Data</h3>
                                <div class="form-row mb-3">
                                    <div class="form-holder" style="width: 50%">
                                        <input type="text" name="age" class="form-control @error('age') is-invalid @enderror" placeholder="Age" value="{{ old('age') }}">
                                        @error('age')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="form-holder" style="width: 100%">
                                        <textarea name="ad_title" class="form-control @error('ad_title') is-invalid @enderror" rows="5" placeholder="Give ad title">{{ old('ad_title') }}</textarea>
                                        @error('ad_title')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row mb-5">
                                    <div class="form-holder" style="width: 100%">
                                        <textarea name="ad_description" class="form-control @error('ad_description') is-invalid @enderror" rows="5" placeholder="Use this space to describe yourself, your body, talk about your skills, what you like...">{{ old('ad_description') }}</textarea>
                                        @error('ad_description')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <h3>Your contacts</h3>
                                <p class="mb-3" style="font-family: sans-serif; font-size: 16px; font-weight: 700">How would you like to be contacted?</p>
                                <div class="form-row mb-3">
                                    <div class="form-holder" style="width: 100%">
                                        <div class="form-holder custom-radio" style="width: 100%;">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input @error('contacted_type') is-invalid @enderror" name="contacted_type" id="contact_type_phone" value="phone"> Only Phone
                                            </label>
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input @error('contacted_type') is-invalid @enderror" name="contacted_type" id="contact_type_both" value="both"> Both Email and Phone
                                            </label>
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input @error('contacted_type') is-invalid @enderror" name="contacted_type" id="contact_type_email" value="email"> Only Email
                                            </label>
                                        </div>
                                        @error('contacted_type')
                                            <span class="is-invalid text-danger border-0">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="form-holder" style="width:100%">
                                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="contact_field_email" placeholder="Email Address" value="{{ old('email') }}"> 
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="form-holder">
                                        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="contact_field_phone" placeholder="Phone Number" value="{{ old('phone') }}">
                                        @error('phone')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row mb-5">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input @error('whatsapp') is-invalid @enderror" name="whatsapp"> Contact on Whatsapp
                                    </label>
                                </div>
                                <div class="form-row mb-3">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </section>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
