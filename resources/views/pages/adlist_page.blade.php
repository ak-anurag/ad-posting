@extends('parent')

@section('stylesheet')
    <style>
        .item-tags span{
            padding: 5px 7px;
            background-color: rgb(187, 187, 187);
            color: rgb(31, 31, 31);
            border-radius: 5px;
            margin-right: 10px;
        }

        .premium-tag{
            position: absolute;
            top: 0;
            right: 0;
        }

        .premium-tag span{
            padding: 3px 6px;
            background-color: rgb(230, 173, 50);
            box-shadow: 0 0 5px rgb(230, 173, 50);
            font-weight: 400;
            border-radius: 10px;
        }
        .box-sh{
            box-shadow: 1px 1px 3px rgb(177, 177, 177);
            padding: 5px 0;
        }
    </style>
@endsection

@section('content')
    @include('_component._search_container')

    @foreach ($posts as $item)
        <listing-items class="clearfix mb-5">
            <div class="row box-sh">
                <div class="col-md-2 col-5">
                    <a href="{{ route('adlist.detail', ['post_id' => $item->id, 'slug' => Str::slug($item->title)]) }}">
                        <img src="{{ count($item->images) > 0 ? asset($item->images[0]->image) : '' }}" alt="photo" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-10 col-7">
                    <div class="title">
                        @if (Auth::user()->role == 1)
                            <div class="premium-tag">
                                <span>Premium</span>
                            </div>
                        @endif
                        <a href="{{ route('adlist.detail', ['post_id' => $item->id, 'slug' => Str::slug($item->title)]) }}">{{ ucfirst($item->title) }}</a>
                    </div>
                    <div class="overflow">
                        <p>
                            {{ ucfirst($item->description) }}
                        </p>
                    </div>
                    <div class="item-tags">
                        <div class="d-flex justify-content-start">
                            <span><strong>{{ $item->age }} Years</strong></span>
                            <span>{{ ucfirst($item->category) }}</span>
                            <span><i class="ti-location-pin"></i>{{ ucfirst($item->city) }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </listing-items><br>
    @endforeach

@endsection


       