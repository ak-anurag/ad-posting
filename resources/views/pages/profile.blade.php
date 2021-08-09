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
        .inner-box{
            box-shadow: 0 0 5px rgb(221, 221, 221);
        }
    </style>
@endsection

@section('content')
    {{-- <div class="page-header" style="background: url(assets/img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Resume</h2>
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="ti-home"></i> Home</a></li>
                            <li class="current">Resume</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <div id="content">
        <div class="container">
            @if (Session::has('success'))
                <div class="alert alert-success">
                    <strong>
                        {{ Session::get('success') }}
                    </strong>
                </div>
            @endif

            @if (Session::has('fail'))
                <div class="alert alert-danger">
                    <strong>
                        {{ Session::get('fail') }}
                    </strong>
                </div>
            @endif
            <div class="row">
                {{-- <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="right-sideabr">
                        <div class="inner-box">
                            <h4>Manage Account</h4>
                            <ul class="lest item">
                                <li><a class="active" href="resume.html">My Resume</a></li>
                                <li><a href="bookmarked.html">Bookmarked Jobs</a></li>
                                <li><a href="notifications.html">Notifications <span class="notinumber">2</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
                <div class="col-xs-12">
                    <div class="inner-box my-resume">
                        <div class="author-resume">
                            {{-- <div class="thumb">
                                <img src="assets/img/resume/img-1.jpg" alt="">
                            </div> --}}
                            <div class="author-info">
                                <h3>{{ ucfirst(Auth::user()->name) }}</h3>
                                <p class="sub-title">{{ Auth::user()->email }}</p>
                                <p>
                                    <span><i class="ti-phone"></i>{{ Auth::user()->phone }}</span>
                                </p>
                                <p>
                                    <span>Ad Count: {{ isset(Auth::user()->posts) ? Auth::user()->posts->count(): 0 }}</span>
                                </p>
                            </div>
                        </div>
                        <div class="about-me item">
                            <h3>My Ad List </h3>
                            <div class="row">
                                <div class="col-md-12">
                                    @foreach (Auth::user()->posts as $item)
                                        <div class="job-list">
                                            <div class="thumb">
                                                <a href="{{ route('adlist.detail', ['category' => $item->category, 'post_id' => $item->id, 'slug' => Str::slug($item->title)]) }}"><img src="{{ count($item->images) !== 0 ? $item->images[0]->image : '' }}" alt=""></a>
                                            </div>
                                            <div class="job-list-content">
                                                <h4><a href="{{ route('adlist.detail', ['category' => $item->category, 'post_id' => $item->id, 'slug' => Str::slug($item->title)]) }}">{{ ucfirst($item->title) }}</a><span
                                                        class="full-time">Full-Time</span></h4>
                                                <p>
                                                    {{ ucfirst($item->description) }}
                                                </p>
                                                <div class="job-tag"> 
                                                    <div class="pull-left">
                                                        <div class="meta-tag">
                                                            <span><a href="browse-categories.html"><strong>{{ $item->age }} Years</strong></span>
                                                            <span>{{ ucfirst($item->category) }}</span>
                                                            <span><i class="ti-location-pin"></i>{{ ucfirst($item->city) }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="pull-right">
                                                        <a href="{{ route('home.delete.post', ['post_id' => $item->id]) }}" class="btn btn-common btn-rm">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
@endsection



