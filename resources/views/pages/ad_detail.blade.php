@extends('parent')

@section('stylesheet')
    <style>
        .img-thum img{
            width: 100px;
            height: 80px;
        }
        .img-box{
            padding: 7px;
        }
        .img-box img{
            box-shadow: 0 0 5px rgb(121, 121, 121);
        }
    </style>
@endsection

@section('content')
    <section class="job-detail section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="header-detail">
                        <div class="header-content pull-left">
                            <h3><a href="#">{{ ucfirst($post->title) }}</a></h3>
                            <p><span>Date Posted: {{ $post->created_at }}</span></p>
                            {{-- <p>Monthly Salary: <strong class="price">$7000 - $7500</strong></p> --}}
                        </div>
                        <div class="detail-company pull-right text-right">
                            <div class="img-thum">
                                <img class="img-responsive" src="{{ isset($post->images) ? asset($post->images[0]->image) : '' }}" alt="">
                            </div>
                            <div class="name">
                                <h4>{{ ucfirst($post->category) }}</h4>
                                <h5>{{ strtoupper($post->district), strtoupper($post->city) }} </h5>
                                <p>{{ ucfirst($post->address) }}</p>
                            </div>
                        </div>
                        <div class="clearfix">
                            <div class="meta">
                                <span><a class="btn btn-border btn-sm" href="#"><i class="ti-email"></i>
                                        Email</a></span>
                                <span><a class="btn btn-border btn-sm" href="#"><i class="ti-info-alt"></i> Job
                                        Aleart</a></span>
                                <span><a class="btn btn-border btn-sm" href="#"><i class="ti-save"></i> Save This
                                        job</a></span>
                                <span><a class="btn btn-border btn-sm" href="#"><i class="ti-alert"></i> Report
                                        Abuse</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="content-area">
                        <div class="clearfix">
                            <div class="box">
                                <h4>Description</h4>
                                <p>
                                    {{ Str::ucfirst($post->description) }}
                                </p>
                                <h4>Photos</h4>
                                <div class="row">
                                    @foreach ($post->images as $item)
                                        <div class="col-12 col-md-4">
                                            <div class="img-box">
                                                <img src="{{ asset($item->image) }}" alt="photo" >
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="img-box">
                                                <img src="{{ asset($item->image) }}" alt="photo" >
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="img-box">
                                                <img src="{{ asset($item->image) }}" alt="photo" >
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <h2 class="medium-title">Related Jobs</h2>
                    <div class="job-post-wrapper">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="job-list">
                                    <div class="thumb">
                                        <a href="job-details.html"><img src="assets/img/jobs/img-1.jpg" alt=""></a>
                                    </div>
                                    <div class="job-list-content">
                                        <h4><a href="job-details.html">We need a web designer</a><span
                                                class="full-time">Full-Time</span></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut
                                            veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo
                                            atque consectetur saepe corporis odit in dicta reprehenderit, officiis,
                                            praesentium?</p>
                                        <div class="job-tag">
                                            <div class="pull-left">
                                                <div class="meta-tag">
                                                    <span><a href="browse-categories.html"><i
                                                                class="ti-brush"></i>Art/Design</a></span>
                                                    <span><i class="ti-location-pin"></i>Cupertino, CA, USA</span>
                                                    <span><i class="ti-time"></i>60/Hour</span>
                                                </div>
                                            </div>
                                            <div class="pull-right">
                                                <div class="icon">
                                                    <i class="ti-heart"></i>
                                                </div>
                                                <div class="btn btn-common btn-rm">Apply Job</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-list">
                                    <div class="thumb">
                                        <a href="job-details.html"><img src="assets/img/jobs/img-2.jpg" alt=""></a>
                                    </div>
                                    <div class="job-list-content">
                                        <h4><a href="job-details.html">Front-end developer needed</a><span
                                                class="full-time">Full-Time</span></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut
                                            veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo
                                            atque consectetur saepe corporis odit in dicta reprehenderit, officiis,
                                            praesentium?</p>
                                        <div class="job-tag">
                                            <div class="pull-left">
                                                <div class="meta-tag">
                                                    <span><a href="browse-categories.html"><i
                                                                class="ti-desktop"></i>Technologies</a></span>
                                                    <span><i class="ti-location-pin"></i>Cupertino, CA, USA</span>
                                                    <span><i class="ti-time"></i>60/Hour</span>
                                                </div>
                                            </div>
                                            <div class="pull-right">
                                                <div class="icon">
                                                    <i class="ti-heart"></i>
                                                </div>
                                                <div class="btn btn-common btn-rm">Apply Job</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-list">
                                    <div class="thumb">
                                        <a href="job-details.html"><img src="assets/img/jobs/img-3.jpg" alt=""></a>
                                    </div>
                                    <div class="job-list-content">
                                        <h4><a href="job-details.html">Software Enginner</a><span
                                                class="part-time">Part-Time</span></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut
                                            veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo
                                            atque consectetur saepe corporis odit in dicta reprehenderit, officiis,
                                            praesentium?</p>
                                        <div class="job-tag">
                                            <div class="pull-left">
                                                <div class="meta-tag">
                                                    <span><a href="browse-categories.html"><i
                                                                class="ti-desktop"></i>Technologies</a></span>
                                                    <span><i class="ti-location-pin"></i>Cupertino, CA, USA</span>
                                                    <span><i class="ti-time"></i>60/Hour</span>
                                                </div>
                                            </div>
                                            <div class="pull-right">
                                                <div class="icon">
                                                    <i class="ti-heart"></i>
                                                </div>
                                                <div class="btn btn-common btn-rm">Apply Job</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                {{-- <div class="col-md-4 col-sm-12 col-xs-12">
                    <aside>
                        <div class="sidebar">
                            <div class="box">
                                <h2 class="small-title">Job Details</h2>
                                <ul class="detail-list">
                                    <li>
                                        <a href="#">Job Id</a>
                                        <span class="type-posts">Jb1246789</span>
                                    </li>
                                    <li>
                                        <a href="#">Location</a>
                                        <span class="type-posts">New York, NY</span>
                                    </li>
                                    <li>
                                        <a href="#">Company</a>
                                        <span class="type-posts">LemonKids LLC</span>
                                    </li>
                                    <li>
                                        <a href="#">Type</a>
                                        <span class="type-posts">Private</span>
                                    </li>
                                    <li>
                                        <a href="#">Employment Status</a>
                                        <span class="type-posts">Permanent</span>
                                    </li>
                                    <li>
                                        <a href="#">Employment Type</a>
                                        <span class="type-posts">Manager</span>
                                    </li>
                                    <li>
                                        <a href="#">Positions</a>
                                        <span class="type-posts">5</span>
                                    </li>
                                    <li>
                                        <a href="#">Career Level</a>
                                        <span class="type-posts">Experience</span>
                                    </li>
                                    <li>
                                        <a href="#">Experience</a>
                                        <span class="type-posts">3 Years</span>
                                    </li>
                                    <li>
                                        <a href="#">Gender</a>
                                        <span class="type-posts">Male</span>
                                    </li>
                                    <li>
                                        <a href="#">Nationality</a>
                                        <span class="type-posts">United States</span>
                                    </li>
                                    <li>
                                        <a href="#">Degree</a>
                                        <span class="type-posts">Masters</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="box">
                                <h2 class="small-title">Featured Jobs</h2>
                                <div class="thumb">
                                    <a href="#"><img src="assets/img/jobs/features-img-1.jpg" alt="img"></a>
                                </div>
                                <div class="text-box">
                                    <h4><a href="#">Web Development</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. maiores aperiam quam
                                        perspiciatis.</p>
                                    <a href="#" class="text"><i class="fa fa-map-marker"></i>Moorgate, London</a>
                                    <a href="#" class="text"><i class="fa fa-calendar"></i>Dec 22, 2017 - Mar 17, 2018
                                    </a>
                                    <strong class="price"><i class="fa fa-money"></i>$4000 - $5000</strong>
                                    <a href="#" class="btn btn-common btn-sm">Apply for this Job</a>
                                </div>
                            </div>
                            <div class="sidebar-jobs box">
                                <h2 class="small-title">Jobs Gallery</h2>
                                <ul>
                                    <li>
                                        <a href="#">General Compliance Officer</a>
                                        <span><i class="fa fa-map-marker"></i>Arlington, VA </span>
                                        <span><i class="fa fa-calendar"></i>Dec 22, 2017 - Mar 17, 2018 </span>
                                    </li>
                                    <li>
                                        <a href="#">Medical Transcrption</a>
                                        <span><i class="fa fa-map-marker"></i>San Francisco, CA</span>
                                        <span><i class="fa fa-calendar"></i>Dec 22, 2017 - Mar 17, 2018 </span>
                                    </li>
                                    <li>
                                        <a href="#">Support Coordinator</a>
                                        <span><i class="fa fa-map-marker"></i>Moorgate, London</span>
                                        <span><i class="fa fa-calendar"></i>Dec 22, 2017 - Mar 17, 2018 </span>
                                    </li>
                                    <li>
                                        <a href="#">General Compliance Officer</a>
                                        <span><i class="fa fa-map-marker"></i>Arlington, VA </span>
                                        <span><i class="fa fa-calendar"></i>Dec 22, 2017 - Mar 17, 2018 </span>
                                    </li>
                                    <li>
                                        <a href="#">Medical Transcrption</a>
                                        <span><i class="fa fa-map-marker"></i>San Francisco, CA</span>
                                        <span><i class="fa fa-calendar"></i>Dec 22, 2017 - Mar 17, 2018 </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div> --}}
            </div>
        </div>
    </section>
@endsection



