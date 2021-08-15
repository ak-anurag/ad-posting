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

    </style>
@endsection

@section('content')

    @foreach ($posts as $item)
        <listing-items class="clearfix mb-5">
            <div class="row">
                <div class="col-md-2 col-5">
                    <a href="{{ route('adlist.detail', ['category' => $item->category, 'post_id' => $item->id, 'slug' => Str::slug($item->title)]) }}">
                        <img src="{{ count($item->images) > 0 ? asset($item->images[0]->image) : '' }}" alt="photo" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-10 col-7">
                    <div class="title">
                        <a href="{{ route('adlist.detail', ['category' => $item->category, 'post_id' => $item->id, 'slug' => Str::slug($item->title)]) }}">{{ $item->title }}</a>
                    </div>
                    <div class="overflow">
                        <p>
                            {{ $item->description }}
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


       