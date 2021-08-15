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
    <div class="container">
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
                </div>
                <div class="col-12 col-md-4 mb-4">
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
                </div>
                <div class="col-12 col-md-4 mb-4">
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
                </div>
                <div class="col-12 col-md-4 mb-4">
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
                </div>
                <div class="col-12 col-md-4 mb-4">
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
                </div>
            </div>
        </div>
        <div class="location-box">
            <div class="title">Please Select Your Location</div>
            <div class="location-list">
                <ul>
                    <li><a href="/escorts/agra/">Agra</a></li>
                    <li><a href="/escorts/ahmedabad/">Ahmedabad</a></li>
                    <li><a href="/escorts/ajmer/">Ajmer</a></li>
                    <li><a href="/escorts/alappuzha/">Alappuzha</a></li>
                    <li><a href="/escorts/ambala/">Ambala</a></li>
                    <li><a href="/escorts/amli/">Amli</a></li>
                    <li><a href="/escorts/bahadurgarh/">Bahadurgarh</a></li>
                    <li><a href="/escorts/bangalore/">Bangalore</a></li>
                    <li><a href="/escorts/belgaum/">Belgaum</a></li>
                    <li><a href="/escorts/bharuch/">Bharuch</a></li>
                    <li><a href="/escorts/bhilai/">Bhilai</a></li>
                    <li><a href="/escorts/bhopal/">Bhopal</a></li>
                    <li><a href="/escorts/bhubaneswar/">Bhubaneswar</a></li>
                    <li><a href="/escorts/bhuj/">Bhuj</a></li>
                    <li><a href="/escorts/chandigarh/">Chandigarh</a></li>
                    <li><a href="/escorts/chennai/">Chennai</a></li>
                    <li><a href="/escorts/coimbatore/">Coimbatore</a></li>
                    <li><a href="/escorts/dehradun/">Dehradun</a></li>
                    <li><a href="/escorts/delhi/">Delhi</a></li>
                    <li><a href="/escorts/dibrugarh/">Dibrugarh</a></li>
                    <li><a href="/escorts/dimapur/">Dimapur</a></li>
                    <li><a href="/escorts/erode/">Erode</a></li>
                    <li><a href="/escorts/faridabad/">Faridabad</a></li>
                    <li><a href="/escorts/ghaziabad/">Ghaziabad</a></li>
                    <li><a href="/escorts/gorakhpur/">Gorakhpur</a></li>
                    <li><a href="/escorts/gurgaon/">Gurgaon</a></li>
                    <li><a href="/escorts/hyderabad/">Hyderabad</a></li>
                    <li><a href="/escorts/indore/">Indore</a></li>
                    <li><a href="/escorts/jaipur/">Jaipur</a></li>
                    <li><a href="/escorts/jamnagar/">Jamnagar</a></li>
                    <li><a href="/escorts/jodhpur/">Jodhpur</a></li>
                    <li><a href="/escorts/jorhat/">Jorhat</a></li>
                    <li><a href="/escorts/kadapa/">Kadapa</a></li>
                    <li><a href="/escorts/kanpur/">Kanpur</a></li>
                    <li><a href="/escorts/kerala/">Kerala</a></li>
                    <li><a href="/escorts/Kochi/">Kochi</a></li>
                    <li><a href="/escorts/kolkata/">Kolkata</a></li>
                    <li><a href="/escorts/kota/">Kota</a></li>
                    <li><a href="/escorts/kumhari/">Kumhari</a></li>
                    <li><a title="escorts Lucknow" href="/escorts/lucknow/">Lucknow</a></li>

                    <li><a title="escorts Ludhiana" href="/escorts/ludhiana/">Ludhiana</a></li>

                    <li><a title="escorts Madurai" href="/escorts/madurai/">Madurai</a></li>

                    <li><a title="escorts Meerut" href="/escorts/meerut/">Meerut</a></li>

                    <li><a title="escorts Mumbai" href="/escorts/mumbai/">Mumbai</a></li>

                    <li><a title="escorts Mysore" href="/escorts/mysore/">Mysore</a></li>

                    <li><a title="escorts Nagpur" href="/escorts/nagpur/">Nagpur</a></li>

                    <li><a title="escorts Navsari" href="/escorts/navsari/">Navsari</a></li>

                    <li><a title="escorts Noida" href="/escorts/noida/">Noida</a></li>

                    <li><a title="escorts Palanpur" href="/escorts/palanpur/">Palanpur</a></li>

                    <li><a title="escorts Panvel" href="/escorts/panvel/">Panvel</a></li>

                    <li><a title="escorts Patna" href="/escorts/patna/">Patna</a></li>

                    <li><a title="escorts Pollachi" href="/escorts/pollachi/">Pollachi</a></li>

                    <li><a title="escorts Pune" href="/escorts/pune/">Pune</a></li>

                    <li><a title="escorts Rajkot" href="/escorts/rajkot/">Rajkot</a></li>

                    <li><a title="escorts Ranchi" href="/escorts/ranchi/">Ranchi</a></li>

                    <li><a title="escorts Rangia" href="/escorts/rangia/">Rangia</a></li>

                    <li><a title="escorts Ratanpur" href="/escorts/ratanpur/">Ratanpur</a></li>

                    <li><a title="escorts Salem" href="/escorts/salem/">Salem</a></li>

                    <li><a title="escorts Surat" href="/escorts/surat/">Surat</a></li>

                    <li><a title="escorts Tirupati" href="/escorts/tirupati/">Tirupati</a></li>

                    <li><a title="escorts Vadodara" href="/escorts/vadodara/">Vadodara</a></li>

                    <li><a title="escorts Vapi" href="/escorts/vapi/">Vapi</a></li>

                    <li><a title="escorts Varanasi" href="/escorts/varanasi/">Varanasi</a></li>

                    <li><a title="escorts Vijayawada" href="/escorts/vijayawada/">Vijayawada</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
        