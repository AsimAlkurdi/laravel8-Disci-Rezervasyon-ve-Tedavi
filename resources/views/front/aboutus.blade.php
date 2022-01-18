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
                <div class="col-md-5 col-sm-6">
                    <p class="half_space">{!! $setting->aboutus !!}</p>
                      <ul class="welcome_list">
                        <li>Cardiothoracic Surgery</li>
                        <li>Nuclear magnetic</li>
                        <li>Cardiovascular Diseases</li>
                        <li>Ophthalmology</li>
                        <li>Neurology</li>
                    </ul>
                </div>
                <div class="col-md-7 col-sm-6">
                    <img class="img-responsive" src="{{url('/')}}/userfile/111.jpg" alt="welcome medix">
                </div>
            </div>
        </div>
    </section>

@endsection
