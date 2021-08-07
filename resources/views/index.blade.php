@extends('parent')

@section('stylesheet')
    {{-- <style>
        .search-container{
            padding: 20px;
        }
    </style> --}}
@endsection


@section('content')

    <div class="header">

        <section id="intro-bg">
            @include('_component._header')

            <div class="search-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content">
                                <form method="">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text"
                                                    placeholder="search">
                                                <i class="ti-time"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" type="email"
                                                    placeholder="city / province / zip code">
                                                <i class="ti-location-pin"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="search-category-container">
                                                <label class="styled-select">
                                                    <select class="dropdown-product selectpicker">
                                                        <option>All Categories</option>
                                                        <option>Finance</option>
                                                        <option>IT & Engineering</option>
                                                        <option>Education/Training</option>
                                                        <option>Art/Design</option>
                                                        <option>Sale/Markting</option>
                                                        <option>Healthcare</option>
                                                        <option>Science</option>
                                                        <option>Food Services</option>
                                                    </select>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-1 col-sm-6">
                                            <button type="button" class="btn btn-search-icon"><i
                                                    class="ti-search"></i></button>
                                        </div>
                                    </div>
                                    {{-- <div class="row" style="margin-top: 20px;">
                                        <div class="col-12 col-md-11 col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text"
                                                    placeholder="Search here">
                                                <i class="ti-search"></i>
                                            </div>
                                        </div>
                                    </div> --}}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    {{-- <section class="find-job section">
        <div class="container">
            <h2 class="section-title">Hot Jobs</h2>
            @foreach ($posts as $item)
                {{ $item }}
            @endforeach
        </div>
    </section> --}}

    <section class="featured-jobs section">
        <div class="container">
            <h2 class="section-title">
                Hot meetings in your city
            </h2>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="featured-wrap">
                            <div class="featured-inner">
                                <figure class="item-thumb">
                                    <a class="hover-effect" href="job-page.html">
                                        <img src="assets/img/features/img-1.jpg" alt="">
                                    </a>
                                </figure>
                                <div class="item-body">
                                    <h3 class="job-title"><a href="job-page.html">Call Girls</a></h3>
                                    <div class="adderess">Call girls and escort ads. Independent girls and escorts waiting to satisfy your sexual fantasies. Escort and women seeking men W4M. Enjoy their erotic services</div>
                                </div>
                            </div>
                        </div>
                        <div class="item-foot">
                            <span><i class="ti-calendar"></i> 4 months ago</span>
                            <span><i class="ti-time"></i> Full Time</span>
                            <div class="view-iocn">
                                <a href="job-page.html"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="featured-wrap">
                            <div class="featured-inner">
                                <figure class="item-thumb">
                                    <a class="hover-effect" href="job-page.html">
                                        <img src="assets/img/features/img-2.jpg" alt="">
                                    </a>
                                </figure>
                                <div class="item-body">
                                    <h3 class="job-title"><a href="job-page.html">Massagees</a></h3>
                                    <div class="adderess">Enjoy the best erotic massages ads. All sexual services. The hottest girls offer you a relaxing and hot massage. Full body massages</div>
                                </div>
                            </div>
                        </div>
                        <div class="item-foot">
                            <span><i class="ti-calendar"></i> 5 months ago</span>
                            <span><i class="ti-time"></i> Part Time</span>
                            <div class="view-iocn">
                                <a href="job-page.html"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="featured-wrap">
                            <div class="featured-inner">
                                <figure class="item-thumb">
                                    <a class="hover-effect" href="job-page.html">
                                        <img src="assets/img/features/img-3.jpg" alt="">
                                    </a>
                                </figure>
                                <div class="item-body">
                                    <h3 class="job-title"><a href="job-page.html">Male Escorts</a></h3>
                                    <div class="adderess">Male escort services, gigolos, gay escorts and call boys. Models and male adult services. Dating with male escorts</div>
                                </div>
                            </div>
                        </div>
                        <div class="item-foot">
                            <span><i class="ti-calendar"></i> 3 months ago</span>
                            <span><i class="ti-time"></i> Full Time</span>
                            <div class="view-iocn">
                                <a href="job-page.html"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="featured-wrap">
                            <div class="featured-inner">
                                <figure class="item-thumb">
                                    <a class="hover-effect" href="job-page.html">
                                        <img src="assets/img/features/img-3.jpg" alt="">
                                    </a>
                                </figure>
                                <div class="item-body">
                                    <h3 class="job-title"><a href="job-page.html">Transsexual</a></h3>
                                    <div class="adderess">Transsexual dating. Discover the new sexual services with the sexiest transsexual in India. Shemale, ladyboy and TS escorts</div>
                                </div>
                            </div>
                        </div>
                        <div class="item-foot">
                            <span><i class="ti-calendar"></i> 1 months ago</span>
                            <span><i class="ti-time"></i> Part Time</span>
                            <div class="view-iocn">
                                <a href="job-page.html"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="featured-wrap">
                            <div class="featured-inner">
                                <figure class="item-thumb">
                                    <a class="hover-effect" href="job-page.html">
                                        <img src="assets/img/features/img-2.jpg" alt="">
                                    </a>
                                </figure>
                                <div class="item-body">
                                    <h3 class="job-title"><a href="job-page.html">Adult Meetings</a></h3>
                                    <div class="adderess">Casual dating, find your true love or NSA. Chat with local singles, girls or boys for a meeting. Meet with them and find a dating partner</div>
                                </div>
                            </div>
                        </div>
                        <div class="item-foot">
                            <span><i class="ti-calendar"></i> 6 months ago</span>
                            <span><i class="ti-time"></i> Full Time</span>
                            <div class="view-iocn">
                                <a href="job-page.html"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="featured-wrap">
                            <div class="featured-inner">
                                <figure class="item-thumb">
                                    <a class="hover-effect" href="job-page.html">
                                        <img src="assets/img/features/img-1.jpg" alt="">
                                    </a>
                                </figure>
                                <div class="item-body">
                                    <h3 class="job-title"><a href="job-page.html">Managing Director</a></h3>
                                    <div class="adderess"><i class="ti-location-pin"></i> NY, United States</div>
                                </div>
                            </div>
                        </div>
                        <div class="item-foot">
                            <span><i class="ti-calendar"></i> 7 months ago</span>
                            <span><i class="ti-time"></i> Part Time</span>
                            <div class="view-iocn">
                                <a href="job-page.html"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

@endsection
   