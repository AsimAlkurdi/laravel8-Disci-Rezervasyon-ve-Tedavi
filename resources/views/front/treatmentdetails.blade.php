@extends('layouts.front.fmaster')


@section('title', $data->title)
@section('description'){{$data->description}} @endsection
@section('keywords', $data->keywords)


@Section('content')
    <!--Page header & Title-->
    <section id="page_header">
        <div class="page_title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">Treatment details</h2>
                        <div class="page_link"><a href="{{route('home')}}">Home</a>
                            <span><i class="fa fa-long-arrow-right"></i>{{$data->title}}</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@php

$countreview = \App\Http\Controllers\HomeController::countreview($data->id);
@endphp
    <!-- Blog Details -->
    <section id="blog" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7">
                    <div class="blog_item padding-bottom">
                        <h2>{{$data->title}}</h2>
                        <ul class="comments">
                            <li><a href="#">{{$data->created_at}}</a></li>
                        </ul>
                        <div class="specialists_wrap_slider">
                            <div id="our-specialist" class="owl-carousel">
                                @foreach($datalist as $im)
                                <div class="item">
                                    <div class="specialist_wrap">
                                        <img src="{{url('/')}}/userfile/{{$im->image}}" alt="Docotor">
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <p> {{$data->description}} </p>
                        <p>{{$data->detail}}</p>
                          <div class="clearfix">
                            <ul class="comments pull-left">
                                <li>      <a class="red-btn button3" href="{{route('user_randevu_create')}}" data-text="Appointment">Make Appointment</a>
                                </li>
                            </ul>
                        </div>


                        <h3>Comments({{$countreview}})</h3>
                        @foreach($review as $re)
                        <div class="media blog-reply">
                            <div class="media-body">
                                <span>{{$re->user->name}} {{$re->created_at}}</span>
                                <p>Subject :{{$re->subject}}</p>
                                <p>{{$re->comment}}</p>

                            </div>
                        </div>
                        @endforeach

                        <h3>Leave a Reply</h3>
                          @livewire('review', ['id' => $data->id])
                        @livewireScripts
                    </div>
                </div>
                <div class="col-md-4 col-sm-5">
                    <aside class="sidebar">
                        <div class="widget">
                            <h3>Categories</h3>
                            <ul class="widget_links">
                                <li><a href="#">Facelift</a></li>
                                <li><a href="#">Dental</a></li>
                                <li><a href="#">Tummy Tuck</a></li>
                                <li><a href="#">Colonoscopy</a></li>
                                <li><a href="#">Heart Patient</a></li>
                                <li><a href="#">Chin Implant</a></li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h3>Tags</h3>
                            <ul class="tags">
                                <li><a href="#">Benefits</a></li>
                                <li><a href="#">Kids Health</a></li>
                                <li><a href="#">Body Lift</a></li>
                                <li><a href="#">Trunk Liposuction</a></li>
                                <li><a href="#">Liposuction</a></li>
                                <li><a href="#">ill</a></li>
                                <li><a href="#">Cardiac ablation</a></li>
                                <li><a href="#">Clean Environment</a></li>
                                <li><a href="#">Kids Health</a></li>
                                <li><a href="#">Trunk Liposuction</a></li>
                                <li><a href="#">ill</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>



@endsection


