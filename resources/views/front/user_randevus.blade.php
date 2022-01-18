@extends('layouts.front.fmaster')


@section('title', 'User profile')



@Section('content')

    <!--Page header & Title-->
    <section id="page_header">
        <div class="page_title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">Randevus</h2>
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
                          <li>
                              <a href="{{route('user_randevu')}}"> All Randevus </a>
                          </li>
                          <li>
                              <a href="{{route('user_randevu_list',['status'=>'expecting'])}}"> New  </a>
                          </li>
                          <li>
                              <a href="{{route('user_randevu_list',['status'=>'accepted'])}}"> accepted </a>
                          </li>
                          <li>
                              <a href="{{route('user_randevu_list',['status'=>'completed'])}}"> completed </a>
                          </li>
                          <li>
                              <a href="{{route('user_randevu_list',['status'=>'processing'])}}"> processing </a>
                          </li>

                          <li>
                              <a href="{{route('admin_randevu_list',['status'=>'canceled'])}}"> canceled </a>
                          </li>
                    </ul>
                </div>
                <div class="col-md-9 col-sm-9">
                    <a href="{{route('user_randevu_create')}}"  class="btn btn-primary  mb-2">Add New Randevu</a>
<br>
<br>

                    <table id="example1" class="table table-bordered table-striped">
                   <thead>
                   <tr>
                       <th>id</th>
                       <th>Treatment</th>
                       <th>Patient Name</th>
                       <th>Dcotor Name</th>
                       <th>Created At</th>
                       <th>status</th>
                       <th>Details</th>

                   </tr>
                   </thead>
                   <tbody>
                   @if (\Session::has('success'))
                       <div class="alert alert-light-success border-0 mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Success!</strong>  <p>{{ \Session::get('success') }}</p>
                       </div>
                       <br />
                       <br />
                   @endif
                   @foreach($datalist as $ca)
                       <tr>
                           <td>{{$ca->id}}</td>
                           <td><a href="{{route('appointment',['id' => $ca->id])}}">{{$ca->treatment->title}}</a></td>
                           <td>{{$ca->name}}</td>
                           <td>{{$ca->doctor->name}}</td>
                           <td>{{$ca->created_at}}</td>
                           <td>{{$ca->status}}</td>



                           <td><a href="{{route('user_randevu_show',['id' => $ca->id])}}" class="btn btn-primary  mb-2">Show</a>


                       </tr>


                   @endforeach
                   </tbody>

               </table>
                </div>
            </div>
        </div>
    </section>


@endsection
