
@extends('layouts.admin.amaster')


@section('title'.'add treatments ıamge page')
@section('keywords'.'')



@Section('content')



    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing">

                <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-chart-three">
                        <div class="widget-heading">
                            <div class="">
                                <h5 class=""> {{$data[0]->title}} images </h5>
                            </div>

                        </div>

                        <div class="widget-content">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped mb-4">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>title</th>
                                        <th>image</th>
                                        <th>actions</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($image as $image)
                                    <tr>
                                        <td>{{$image->Id}}</td>
                                        <td>{{$image->title}}</td>

                                        <td><img src="{{url('/')}}/userfile/{{$image->image}}" height="30"> </td>


                                        </td>
                                        <td><a href="{{route('admin_image_delete',['id'=>$image->Id,'treatment_id'=>$data[0]->id])}}" class="btn btn-outline-danger  mb-2" onclick="return confirm('are you sure')">delete</a>
                                        </td>
                                    </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>        </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-activity-five">

                        <div class="widget-heading">
                            <h5 class="">add new image</h5>

                        </div>

                        <div class="widget-content">

                            <div class="w-shadow-top"></div>
                            <div class="timeline-line">

                                <form action="{{route('admin_image_store',$data[0]->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <div class="col-xl-10 col-lg-9 col-sm-10">
                                            <input type="text" name="title" class="form-control"  placeholder="title">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-xl-10 col-lg-9 col-sm-10">

                                            <input type="file" name="image" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary mt-3">save</button>
                                        </div>
                                    </div>
                                </form></div>
                            <div class="w-shadow-bottom"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>            </div>

    @endsection
