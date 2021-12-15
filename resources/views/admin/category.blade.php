@extends('layouts.admin.amaster')


@section('title'.'category sayfa')
@section('keywords'.'')




@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>
                     Category
                        <a href="{{url('/')}}/admin/category/add"  class="btn btn-outline-primary btn-rounded mb-2">add new category</a>

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
                                <th>title</th>
                                <th>usd_id</th>
                                <th>status</th>
                                <th>ımage</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                            </thead>
                            <tbody>

                             @foreach($category as $category)
                            <tr>
                                <td>{{$category->Id}}</td>
                                <td>{{$category->title}}</td>
                                <td>{{$category->categoryusd}}</td>

                                <td>{{$category->status}}</td>
                                <td><img src="{{url('/')}}/userfile/{{$category->image}}" height="30"> </td>

                                <td><a href="{{url('/')}}/admin/category/edit/{{$category->Id}}" class="btn btn-outline-secondary mb-2">edit</a>

                                </td>
                                <td><a href="{{url('/')}}/admin/category/destroy/{{$category->Id}}" class="btn btn-outline-danger  mb-2" onclick="return confirm('are you sure')">delete</a>
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
