@extends('parent')

@section('stylesheet')
    <style>
        .is-invalid{
            border: 1px solid red;
        }
        .page-ads, .wrapper{
            padding: 8px 10px;
            background-color: rgb(247, 247, 247);
        }
        .form-control{
            /* color:rgb(175, 169, 169); */
            background-color: #fff;
        }
        .image-btn{
            width: 200px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            position: relative;
            border-radius: 4px;
            background-color: rgb(255, 111, 0);
            font-family: sans-serif;
            font-size: 16px;
            color: #fff;
            cursor: pointer;
        }
        input[type="file"]{
            opacity: 0;
        }
    </style>
@endsection

@section('down_script')

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
                            <form action="{{ route('post.image') }}" method="post" id="wizard" enctype="multipart/form-data">
                                @csrf

                                <section>
                                    @foreach ($errors->all() as $item)
                                        {{ $item }} <br>
                                    @endforeach
                                    <input type="hidden" value="{{ Crypt::decrypt(app('request')->input('post_id')) }}" name="post_id">
                                    <div class="input-group" style="margin-bottom: 30px;">
                                        <div class="input-group-prepend">
                                            <label class="image-btn">
                                                Select Image
                                                <input type="file" name="image[]" class="form-control" multiple>
                                            </label>
                                        </div>
                                    </div> 
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </section>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
