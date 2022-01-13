@extends('layouts.front.fmaster')


@section('title', 'about us -'. $setting->title)
@section('description'){{$setting->description}} @endsection
@section('keywords', $setting->keywords)



@Section('content')

    <!--Page header & Title-->
    <section id="page_header">
        <div class="page_title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">About Us</h2>
                        <div class="page_link"><a href="{{route('home')}}">Home</a><i class="fa fa-long-arrow-right"></i><span>About Us</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!--Welcome-->
    <section id="welcome" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading">Welcome to Medix</h2>
                    <hr class="heading_space">
                </div>
                <div class="col-md-7 col-sm-6">
                    <p class="half_space">{!! $setting->aboutus !!}</p>
                      <ul class="welcome_list">
                        <li>Cardiothoracic Surgery</li>
                        <li>Nuclear magnetic</li>
                        <li>Cardiovascular Diseases</li>
                        <li>Ophthalmology</li>
                        <li>Neurology</li>
                    </ul>
                </div>
                <div class="col-md-5 col-sm-6">
                    <img class="img-responsive" src="{{url('/')}}/userfile/111.jpg" alt="welcome medix">
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
                    <div class="slider_wrap">
                        <div id="our-specialist" class="owl-carousel">
                            <div class="item">
                                <div class="specialist_wrap">
                                    <img src="images/our-specialist1.jpg" alt="Docotor">
                                    <h3>Dr. Andrew Bert</h3>
                                    <small>Outpatient Surgery</small>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="specialist_wrap">
                                    <img src="images/our-specialist2.jpg" alt="Docotor">
                                    <h3>Dr. Mecan smith</h3>
                                    <small>Heart Specialist</small>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="specialist_wrap">
                                    <img src="images/our-specialist3.jpg" alt="Docotor">
                                    <h3>Dr. Jack Bravo</h3>
                                    <small>Cardiologist</small>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="specialist_wrap">
                                    <img src="images/our-specialist1.jpg" alt="Docotor">
                                    <h3>Dr. Andrew Berton</h3>
                                    <small>Outpatient Surgery</small>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="specialist_wrap">
                                    <img src="images/our-specialist2.jpg" alt="Docotor">
                                    <h3>Dr. Andrew Berton</h3>
                                    <small>Outpatient Surgery</small>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="specialist_wrap">
                                    <img src="images/our-specialist3.jpg" alt="Docotor">
                                    <h3>Dr. Andrew Berton</h3>
                                    <small>Outpatient Surgery</small>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






@endsection
