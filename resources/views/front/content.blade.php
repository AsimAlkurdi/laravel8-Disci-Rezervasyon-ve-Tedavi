
@Section('content')

<!--Blue Section-->
<section class="bg_blue padding-half">
    <div class="container">
        <div class="row">
            @foreach($datalistsss as $treatment)
            <div class="col-md-4 col-sm-4 white_content">
                <i class="icon-patient-bed"> </i>
                <h3><a href="{{route('categorytreatment',['id' => $treatment->id])}}">{{$treatment->title}}</a></h3>
                <p> {{$treatment->description}}</p>

            </div>
            @endforeach

        </div>
    </div>
</section>


<!--Services plus working hours-->
<section class="padding" id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="heading">Our Services</h2>
                <hr class="heading_space">
                <div class="slider_wrap">
                    <div id="service-slider" class="owl-carousel">
                        @foreach($datalistss as $treatment)
                        <div class="item">
                            <div class="item_inner">
                                <div class="image">
                                    <img src="{{url('/')}}/userfile/{{$treatment->image}}" alt="Services Image">
                                    <a class="overlay" href="{{route('categorytreatment',['id' => $treatment->id])}}"></a>
                                </div>
                                <h3><a href="{{route('user_randevu')}}">{{$treatment->title}}</a></h3>
                                <p>{{$treatment->description}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h2 class="heading">Working Hours</h2>
                <hr class="heading_space">
                <ul class="hours_wigdet">
                    <li>Monday<span>09:00-20:00</span></li>
                    <li>Tuesday<span>09:00-21:00</span></li>
                    <li>Wednesday<span>09:00-20:00</span></li>
                    <li>Thursday<span>24-Hour Shift</span></li>
                    <li>Friday<span>09:00-21:00</span></li>
                    <li>Saturday<span>09:00-18:00</span></li>
                    <li>Sunday<span>11:00-19:00</span></li>
                </ul>
                <h3>Fees & Insurance</h3>
                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse <strong>molestie consequat</strong>, vel illum dolore nulla facilisis.</p>
            </div>
        </div>
    </div>
</section>



<!-- Specialists -->
<section id="specialists" class="bg_grey padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="heading">Meet Our Specialists</h2>
                <hr class="heading_space">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="specialists_wrap_slider">
                    <div id="specialist-slider" class="owl-carousel">
                        @foreach($datalists as $doc)

                        <div class="item">
                            <div class="specialist_info">
                                <h2>{{$doc->id}}</h2>
                                <h3>{{$doc->name}}</h3>
                                <small>{{$doc->specialty}}</small>
                                <p>{{$doc->email}}</p>
                                <p>{{$doc->phone}}</p>

                            </div>
                            <div class="specialist_photo">
                                <img src="{{url('/')}}/userfile/{{$doc->image}}" height="300" width="200" alt="Docotor">
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
