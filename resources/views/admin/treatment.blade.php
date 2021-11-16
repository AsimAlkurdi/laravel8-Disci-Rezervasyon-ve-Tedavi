@extends('layouts.admin.amaster')


@section('title'.'treatment sayfa')
@section('keywords'.'')




@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>Striped Table</h3>
                </div>
            </div>

            <div class="row" id="cancel-row">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <table id="zero-config" class="table table-striped" style="width:100%">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>title</th>
                                <th>keywords</th>
                                <th>description</th>
                                <th>price</th>
                                <th>created_at</th>
                                <th>updated_at</th>
                                <th>image</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                            </thead>
                            <tbody>

                             @foreach($treatment as $treatment)
                            <tr>
                                <td>{{$treatment->Id}}</td>
                                <td>{{$treatment->title}}</td>
                                <td>{{$treatment->keywords}}</td>
                                <td>{{$treatment->description}}</td>
                                <td>{{$treatment->price}}</td>
                                <td>{{$treatment->created_at}}</td>
                                <td>{{$treatment->updated_at}}</td>
                                <td><img src="{{url('/')}}/userfile/{{$treatment->image}}" height="30"> </td>

                                <td><a href="{{url('/')}}/admin/treatment/edit{{$treatment->Id}}" class="btn btn-outline-secondary mb-2">edit</a>

                                </td>
                                <td><a href="{{url('/')}}/admin/treatment/destroy{{$treatment->Id}}" class="btn btn-outline-danger  mb-2">delete</a>
                                </td>

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
