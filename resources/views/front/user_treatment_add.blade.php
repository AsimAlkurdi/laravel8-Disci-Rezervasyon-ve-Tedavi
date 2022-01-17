@extends('layouts.front.fmaster')


@section('title'.'add treatment page')
@section('keywords'.'')



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
                    <h2 class="heading">User profile</h2>
                    <hr class="heading_space">
                </div>
                <div class="col-md-3 col-sm-3">

                    <ul class="welcome_list">
                        <li><a href="{{route('myprofile')}}">My Account</a> </li>
                        <li><a href="{{route('user_treatment')}}">My Treatments</a> </li>
                        <li><a href="{{route('myreviews')}}">My comments</a></li>
                        <li><a href="{{route('admin_logout')}}">log out</a></li>
                    </ul>
                </div>
                <div class="col-md-9 col-sm-9">

           <form action="{{url('/')}}/admin/treatments/create" method="post" enctype="multipart/form-data">
               @csrf
               <div class="row">
                 <div class="col-md-12">
                   <div class="form-group">
                <input class="form-control" type="text" required="" placeholder="Your Name">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input class="form-control" type="email" required="" placeholder="Email">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input class="form-control" type="text" required="" placeholder="Website">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject" required="">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <textarea placeholder="Message"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn-submit button3">Submit Request</button>
            </div>
        </div>
    </div>
</form>
    </div>

</div>
       </div>

    </section>


@endsection
