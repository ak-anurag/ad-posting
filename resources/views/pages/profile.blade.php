@extends('parent')

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
                            <div class="thumb">
                                <img src="assets/img/resume/img-1.jpg" alt="">
                            </div>
                            <div class="author-info">
                                <h3>{{ Auth::user()->name }}</h3>
                                <p class="sub-title">{{ Auth::user()->email }}</p>
                                <p>
                                    <span><i class="ti-phone"></i>{{ Auth::user()->phone }}</span>
                                </p>
                                <p>
                                    <span>Ad Count: 23</span>
                                </p>
                            </div>
                        </div>
                        <div class="about-me item">
                            <h3>About Me <i class="ti-pencil"></i></h3>
                            <p>

                                @foreach (Auth::user()->posts()->where('id', 9)->first()->images as $item)
                                    {{-- {{ $item }} <br> --}}
                                    <img src="{{ asset($item->image) }}" alt="img"><br>
                                @endforeach
                            </p>
                        </div>
                        <div class="work-experence item">
                            <h3>Work Experience <i class="ti-pencil"></i></h3>
                            <h4>UI/UX Designer</h4>
                            <h5>Bannana INC.</h5>
                            <span class="date">Fab 2017-Present(5year)</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero vero, dolores,
                                officia quibusdam architecto sapiente eos voluptas odit ab veniam porro quae
                                possimus itaque, quas! Tempora sequi nobis, atque incidunt!</p>
                            <p><a href="#">4 Projects</a></p>
                            <br>
                            <h4>UI Designer</h4>
                            <h5>Whale Creative</h5>
                            <span class="date">Fab 2017-Present(2year)</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero vero, dolores,
                                officia quibusdam architecto sapiente eos voluptas odit ab veniam porro quae
                                possimus itaque, quas! Tempora sequi nobis, atque incidunt!</p>
                            <p><a href="#">4 Projects</a></p>
                        </div>
                        <div class="education item">
                            <h3>Education <i class="ti-pencil"></i></h3>
                            <h4>Massachusetts Institute Of Technology</h4>
                            <p>Bachelor of Computer Science</p>
                            <span class="date">2010-2014</span>
                            <br>
                            <h4>Massachusetts Institute Of Technology</h4>
                            <p>Bachelor of Computer Science</p>
                            <span class="date">2010-2014</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
@endsection



