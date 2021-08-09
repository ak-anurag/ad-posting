@extends('parent')

@section('stylesheet')
    <style>
        .thumb img{
            height: 200px;
            width: 200px;
        }
        .job-list{
            width: 100%;
        }
        .job-list-content{
            padding: 20px;
        }
    </style>
@endsection

@section('content')
    <div class="header">

        <section id="intro-bg">
            @include('_component._header')

            @include('_component._search_container')
        </section>
    </div>

    @foreach ($posts as $item)
        {{-- {{ $item }} --}}
    @endforeach
    <section class="find-job section">
        <div class="container">
            <h2 class="section-title">Find good a Job</h2>
            <div class="row">
                <div class="col-md-12">
                    @foreach ($posts as $item)
                        <div class="job-list">
                            <div class="thumb">
                                <a href="job-details.html"><img src="{{ count($item->images) !== 0 ? $item->images[0]->image : '' }}" alt=""></a>
                            </div>
                            <div class="job-list-content">
                                <h4><a href="job-details.html">{{ ucfirst($item->title) }}</a><span
                                        class="full-time">Full-Time</span></h4>
                                <p>
                                    {{ ucfirst($item->description) }}
                                </p>
                                <div class="job-tag"> 
                                    <div class="pull-left">
                                        <div class="meta-tag">
                                            <span><strong>{{ $item->age }} Years</strong></span>
                                            <span>{{ ucfirst($item->category) }}</span>
                                            <span><i class="ti-location-pin"></i>{{ ucfirst($item->city) }}</span>
                                        </div>
                                    </div>
                                    <div class="pull-right">
                                        <div class="icon">
                                            <i class="ti-heart"></i>
                                        </div>
                                        <a href="{{ route('adlist.detail', ['category' => $item->category, 'post_id' => $item->id, 'slug' => Str::slug($item->title)]) }}" class="btn btn-common btn-rm">Select</a>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-12">
                    <div class="showing pull-left">
                        <a href="#">Showing <span>6-10</span> Of 24 Jobs</a>
                    </div>
                    <ul class="pagination pull-right">
                        <li class="active"><a href="#" class="btn btn-common"><i class="ti-angle-left"></i> prev</a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li class="active"><a href="#" class="btn btn-common">Next <i
                                    class="ti-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection


       