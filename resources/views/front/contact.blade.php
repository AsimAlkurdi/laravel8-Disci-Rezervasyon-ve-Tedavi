@extends('layouts.front.fmaster')


@section('title', 'Contact -'. $setting->title)
@section('description'){{$setting->description}} @endsection
@section('keywords', $setting->keywords)



@Section('content')

    <!--Page header & Title-->
    <section id="page_header">
        <div class="page_title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">Contact</h2>
                        <div class="page_link"><a href="{{route('home')}}">Home</a><i class="fa fa-long-arrow-right"></i><span>Contact</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if (\Session::has('success'))
        <div class="alert alert-light-success border-0 mb-12" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Success!</strong>  <p>{{ \Session::get('success') }}</p>
        </div>
    @endif


    <!--Welcome-->
    <section id="welcome" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading">Welcome to Medix</h2>



                    <hr class="heading_space">
                </div>
                <div class="col-md-7 col-sm-6">
                    <p class="half_space">{!! $setting->contact !!}</p>
                </div>
                <div class="col-md-5 col-sm-6">
                <h3>Contact Us </h3>
                  <br>
                <p>Your email address will not be published. Required fields are marked *</p>
                <form class="callus" action="{{route('sendmessage')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" name="name" type="text" required placeholder="Your Name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" name="email" type="email" required placeholder="Email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" name="phone" type="text" required placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea type="text" name="message" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn-submit button3">Send Message</button>
                            </div>
                        </div>
                    </div>
                </form>
                </div>

            </div>
        </div>

            </div>
        </div>
    </section>









@endsection
