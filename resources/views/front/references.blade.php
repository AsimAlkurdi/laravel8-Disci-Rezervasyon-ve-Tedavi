@extends('layouts.front.fmaster')


@section('title', 'references -'. $setting->title)
@section('description'){{$setting->description}} @endsection
@section('keywords', $setting->keywords)



@Section('content')

    <!--Page header & Title-->
    <section id="page_header">
        <div class="page_title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">references</h2>
                        <div class="page_link"><a href="{{route('home')}}">Home</a><i class="fa fa-long-arrow-right"></i><span>references</span></div>
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
                <div >
                    <p >{!! $setting->references !!}</p>


                </div>

            </div>
        </div>
    </section>








@endsection
