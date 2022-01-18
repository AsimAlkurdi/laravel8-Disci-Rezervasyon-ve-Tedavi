@extends('layouts.admin.amaster')


@section('title'.'Users sayfa')
@section('keywords'.'')




@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>
                       Users

                    </h3>
                </div>


            </div>
            <br />
        @if (\Session::has('success'))
                <div class="alert alert-light-success border-0 mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Success!</strong>  <p>{{ \Session::get('success') }}</p>
                </div>
                <br />
               <br />
            @endif
            <div class="row" id="cancel-row">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">

                        <table id="zero-config" class="table table-striped" style="width:100%">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>image</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Role</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                            </thead>
                            <tbody>

                             @foreach($datalist as $ca)
                            <tr>
                                <td>{{$ca->id}}</td>
                                <td>
                                    <img src="{{url('/')}}/app/public/{{$ca->profile_photo_path}}" height="30">
                                </td>
                                <td>{{$ca->name}}</td>
                                <td>{{$ca->email}}</td>
                                <td>{{$ca->phone}}</td>
                                <td>
                                  @foreach($ca->role as $rw)
                                        {{$rw->name}}
                                    @endforeach
                                      <a href="{{route('admin_user_role',['id'=>$ca->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 width=800 height=600')">
                                          <i class="far fa-book"> </i>
                                      </a>
                                </td>

                                <td><a href="{{url('/')}}/admin/user/edit/{{$ca->id}}" class="btn btn-outline-secondary mb-2">Edit</a>
                                <td><a href="{{url('/')}}/admin/user/show/{{$ca->id}}" class="btn btn-outline-primary mb-2">Delete</a>



                            </tr>

                             @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection
