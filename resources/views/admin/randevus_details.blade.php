@extends('layouts.admin.amaster')


@section('title'.'Randevus sayfa')
@section('keywords'.'')




@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>
                        Randevus

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
                                <th>Treatment</th>
                                <th>Dcotor Name</th>
                                <th>name</th>

                                <th>Price</th>
                                <th>payment</th>
                                <th>status</th>
                                <th>Note</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($datalist as $ca)
                                <tr>
                                    <td>{{$ca->treatment->title}}</td>
                                    <td>{{$ca->doctor->name}}</td>
                                    <td>{{$ca->randevu->name}}</td>
                                    <td>{{$ca->treatment->price}}</td>

                                    <form action="{{url('/')}}/admin/randevu/updateprocess/{{$ca->id}}" method="post" enctype="multipart/form-data">
                                        @csrf


                                        <td>
                                            <input type="text" name="payment" value=" {{$ca->payment}}" class="form-control"  placeholder=" {{$ca->payment}}">
                                        </td>
                                        <td>
                                            <select   name="status" class="placeholder js-states form-control">
                                                <option  >{{$ca->status}}</option>
                                                <option value="expecting"> expecting</option>
                                                <option value="accepted">accepted</option>
                                                <option value="completed"> completed</option>
                                                <option value="processing">processing</option>
                                                <option value="canceled">canceled</option>

                                            </select>
                                        </td>

                                    <td> <textarea type="text" name="note" value="{{$ca->note}}" class="form-control"  placeholder="">{{$ca->note}}</textarea>

                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-primary mt-3">Save</button>

                                        </td>
                                    </form>




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
