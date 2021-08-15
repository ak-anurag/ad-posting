@extends('parent')

@section('down_script')
    <script>
        $(document).ready(function(){
            $('#telephone').on('click', function(){
                var phone = $(this).attr('data-phone');
                $(this).text(phone);
            });
        });
    </script>
@endsection

@section('content')
    <listing-item>
        <div class="row">
            <div class="col-md-9">
                <h1>{{ Str::ucfirst($post->title) }}</h1>
                <div class="date small-font">Date Posted: {{ date('d-m-y h:i:s A', strtotime($post->created_at)) }}</div>
                <div class="small-font">Category: {{ Str::ucfirst($post->category) }}</div>
                <div class="small-font">City: {{ strtoupper($post->district), strtoupper($post->city) }} </div>
                <div class="address small-font">Address: {{ Str::ucfirst($post->address) }}</div>

                <div class="description">
                    <p>
                        {{ Str::ucfirst($post->description) }}
                    </p>
                </div>
                <div class="gallery">
                    @foreach ($post->images as $item)
                        <div class="item">
                            <img src="{{ asset($item->image) }}" alt="photo" class="img-fluid">
                        </div>
                    @endforeach
                    {{-- <div class="item"><img src="2.jpg" alt="1.jpg" class="img-fluid"></div> --}}
                    {{-- <div class="item"><img src="3.jpg" alt="1.jpg" class="img-fluid"></div> --}}
                </div>
                <!---------->
            </div>
            <div class="col-md-3 sidebar">
                <div class="make-sticky">
                    <ul class="contact-info">
                        <li><a href="tel:+91" class="btn phone" id="telephone" data-phone={{ $post->phone }}>Telephone</a>
                        @if ($post->do_whatsapp == 1)
                            <li><a href="https://wa.me/{{ $post->phone }}" class="btn whatsapp" id="whatsapp">WhatsApp</a></li>
                        @endif
                    </ul>
                </div>
            </div>
            <!---------->
        </div>
    </listing-item>
@endsection
