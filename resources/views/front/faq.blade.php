@extends('layouts.front.fmaster')


@section('title', 'FAQ -'. $setting->title)
@section('description'){{$setting->description}} @endsection
@section('keywords', $setting->keywords)



@Section('content')

    <!--Page header & Title-->

    <section id="page_header">
        <div class="page_title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">FAQ’s</h2>
                        <div class="page_link"><a href="{{route('home')}}">Home</a><i class="fa fa-long-arrow-right"></i><span>About Us</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="faq" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading">Why Choose Us?</h2>
                    <hr class="heading_space">
                    <div class='faq_wrapper'>
                        <ul class='items'>
                            @foreach($datalist as $da)
                            <li>
                                <a href='#'>{!!$da->question!!} </a>
                                <ul class='sub-items'>
                                    <li>
                                        <p class="half_space">{!!$da->answer!!}</p>
                                           </li>
                                </ul>
                            </li>
                            @endforeach
                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </section>








@endsection
