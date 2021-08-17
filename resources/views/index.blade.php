@extends('parent')

@section('stylesheet')
    <style>
        .card-box{
            border: 1px solid rgb(199, 199, 199);
        }
        .detail p{
            font-size: 12px;
            font-family: sans-serif;
        }
    </style>
@endsection

@section('content')
        @include('_component._search_container')
        
        <div class="hero">
            <h1 class="title">Post Your Free Adult Advertisement or Search Hot Advertisers</h1>
            <p>Rainbow Hotties is home to the top-rated female escorts in India. You come to a number of fresh
                classified ads for the sexy babes who are also eager to engage with you sexually. Get ready to bang
                up hot escorts, transsexual, swinger meeting, gay escorts, and adult meeting in your city.This is an
                open platform where pleasure seekers and escorts come to find their interests. If you are not able
                to find your dream girls, create your profile and ask for the services you are looking for. This is
                a highly visited adult classified ad portal that helps you find out the babes you dream of. Post
                your classified ads for FREE if you don't find a perfect profile.</p>
        </div>
        <div id="categories">
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <a href="{{ route('adlist.category', ['category' => 'callgirl']) }}">
                        <div class="card-box">
                            <div class="image">
                                <img class="img-fluid" src="https://ii.skokka.com/static/img/categories/en/in/womenseekmen_repr.jpg" alt="call girl">
                            </div>
                            <p class="bg-dark text-light text-center p-2">
                                Call Girl
                            </p>
                            <div class="detail">
                                <p class="p-2">
                                    Call girls and escort ads. Independent girls and escorts waiting to satisfy your sexual fantasies. Escort and women seeking men W4M. Enjoy their erotic services
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <a href="{{ route('adlist.category', ['category' => 'massages']) }}">
                        <div class="card-box">
                            <div class="image">
                                <img class="img-fluid" src="https://ii.skokka.com/static/img/categories/massages_repr.jpg" alt="call girl">
                            </div>
                            <p class="bg-dark text-light text-center p-2">
                                Massages
                            </p>
                            <div class="detail">
                                <p class="p-2">
                                    Enjoy the best erotic massages ads. All sexual services. The hottest girls offer you a relaxing and hot massage. Full body massages
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <a href="{{ route('adlist.category', ['category' => 'male-escorts']) }}">
                        <div class="card-box">
                            <div class="image">
                                <img class="img-fluid" src="https://ii.skokka.com/static/img/categories/en/in/menseekwomen_repr.jpg" alt="call girl">
                            </div>
                            <p class="bg-dark text-light text-center p-2">
                                Male Escorts
                            </p>
                            <div class="detail">
                                <p class="p-2">
                                    Male escort services, gigolos, gay escorts and call boys. Models and male adult services. Dating with male escorts
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <a href="{{ route('adlist.category', ['category' => 'transsexual']) }}">
                        <div class="card-box">
                            <div class="image">
                                <img class="img-fluid" src="https://ii.skokka.com/static/img/categories/en/in/trans_repr.jpg" alt="call girl">
                            </div>
                            <p class="bg-dark text-light text-center p-2">
                                Transsexual
                            </p>
                            <div class="detail">
                                <p class="p-2">
                                    Transsexual dating. Discover the new sexual services with the sexiest transsexual in India. Shemale, ladyboy and TS escorts
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <a href="{{ route('adlist.category', ['category' => 'adult-meetings']) }}">
                        <div class="card-box">
                            <div class="image">
                                <img class="img-fluid" src="https://ii.skokka.com/static/img/categories/seekmeetings_repr.jpg" alt="call girl">
                            </div>
                            <p class="bg-dark text-light text-center p-2">
                                Adult Meetings
                            </p>
                            <div class="detail">
                                <p class="p-2">
                                    Casual dating, find your true love or NSA. Chat with local singles, girls or boys for a meeting. Meet with them and find a dating partner
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="location-box">
            <div class="title">Please Select Your Location</div>
            <div class="location-list">
                <ul>
                    @foreach (DB::table('post_ads')->select('city')->get() as $item)
                        <li>
                            <a href="{{ route('adlist.city', ['city' => $item->city]) }}">{{ Str::ucfirst($item->city) }}</a>
                        </li>                    
                    @endforeach
                </ul>
            </div>
        </div>
@endsection
        