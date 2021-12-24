<h3>add new image for {{$data[0]->title}}</h3>


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
                                <h5 class=""> images </h5>
                            </div>

                        </div>

                        <div class="widget-content">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped mb-4">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Sale</th>
                                        <th class="text-center">Status</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Shaun Park</td>
                                        <td>10/08/2020</td>
                                        <td>320</td>
                                        <td class="text-center"><span class="text-success">Complete</span></td>
                                        <td class="text-center"><svg> ... </svg></td>
                                    </tr>
                                    <tr>
                                        <td> Alma Clarke</td>
                                        <td>11/08/2020</td>
                                        <td>420</td>
                                        <td class="text-center"><span class="text-secondary">Pending</span></td>
                                        <td class="text-center"><svg> ... </svg></td>
                                    </tr>
                                    <tr>
                                        <td>Xavier</td>
                                        <td>12/08/2020</td>
                                        <td>130</td>
                                        <td class="text-center"><span class="text-info">In progress</span></td>
                                        <td class="text-center"><svg> ... </svg></td>
                                    </tr>
                                    <tr>
                                        <td>Vincent Carpenter</td>
                                        <td>13/08/2020</td>
                                        <td>260</td>
                                        <td class="text-center"><span class="text-danger">Canceled</span></td>
                                        <td class="text-center"><svg> ... </svg></td>
                                    </tr>
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

                                <form action="{{route('admin_image_store',$data[0]->Id)}}" method="post" enctype="multipart/form-data">
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

    ,@endsection
