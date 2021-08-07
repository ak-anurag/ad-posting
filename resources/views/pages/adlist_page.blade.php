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

            <div class="search-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content">
                                <form method="post" action="{{ route('show_adlist') }}">
                                    @csrf
                                    
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" name="search_term" type="text" placeholder="Search">
                                                <i class="ti-time"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" name="city" type="text" placeholder="City">
                                                <i class="ti-location-pin"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="search-category-container">
                                                <label class="styled-select">
                                                    <select name="category" class="dropdown-product selectpicker">
                                                        <option value="callgirl">Call Girl</option>
                                                        <option value="massages">Massages</option>
                                                        <option value="male-escorts">Male Escorts</option>
                                                        <option value="transsexual">Transsexual</option>
                                                        <option value="adult-meetings">Adult Meetings</option>
                                                    </select>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-1 col-sm-6">
                                            <button type="submit" class="btn btn-search-icon"><i class="ti-search"></i></button>
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
                                            <span><a href="browse-categories.html"><strong>{{ $item->age }} Years</strong></span>
                                            <span>{{ ucfirst($item->category) }}</span>
                                            <span><i class="ti-location-pin"></i>{{ ucfirst($item->city) }}</span>
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


       