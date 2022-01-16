@extends('layouts.front.fmaster')


@section('title', $setting->title)
@section('description'){{$setting->description}} @endsection
@section('keywords', $setting->keywords)


@Section('content')
    <!--Page header & Title-->
    <section id="page_header">
        <div class="page_title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">Treatments</h2>
                        <div class="page_link"><a href="{{route('home')}}">Home</a>
                           <i class="fa fa-long-arrow-right"></i><span>Treatments</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @foreach($data as $treatment)
<section class="padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="heading">{{$treatment->title}}</h2>
                <hr class="heading_space">
            </div>
            <div class="col-md-7 col-sm-6 department">
                <p class="half_space">{{$treatment->detail}}</p>
                <p class="half_space">{{$treatment->description}}</p>
                <p class="half_space">Price:${{$treatment->price}}</p> <a class="red-btn button3" href="appointment.html" data-text="Appointment">Appointment</a>
            </div>
            <div class="col-md-5 col-sm-6">
                <img class="img-responsive" src="{{url('/')}}/userfile/{{$treatment->image}}" alt="welcome medix">
            </div>
        </div>
    </div>
</section>
    @endforeach

    <section id="pricing" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading">Treatment Investigations</h2>
                    <hr class="heading_space">
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="price">
                        <div class="price_header clearfix">
                            <span class="pull-left">Treatments</span>
                            <span class="pull-right">Price</span>
                        </div>
                        <div class="price_body">
                            <ul class="pricing_feature">
                                @foreach($datalist as $treatment)
                                <li>{{$treatment->title}}<em>${{$treatment->price}}</em></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="price">
                        <div class="price_header clearfix">
                            <span class="pull-left">Treatments</span>
                            <span class="pull-right">Price</span>
                        </div>
                        <div class="price_body">
                            <ul class="pricing_feature">
                                @foreach($datalists as $treatment)
                                    <li>{{$treatment->title}}<em>${{$treatment->price}}</em></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
