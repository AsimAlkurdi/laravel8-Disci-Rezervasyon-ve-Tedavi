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
                       User Role

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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Add New Role</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>


                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td>
                                  @foreach($data->role as $rw)
                                        {{$rw->name}}
                                      <a href="{{route('admin_user_role_delete',['userid'=>$data->id, 'roleid'=>$rw->id])}}" onclick="return confirm('are you sure')">
                                          <i class="far fa-book"> </i>
                                      </a>
                                    @endforeach
                                </td>
                                <form action="{{route('admin_user_role_store',['id'=>$data->id ])}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <td><select name="roleid" >
                                            @foreach($datalist as $rw)

                                            <option value="{{$rw->id}}"> {{$rw->name}}</option>
                                            @endforeach
                                        </select>
                                    </td>

                                    <td>
                                        <button type="submit" class="btn btn-primary mt-3">Add Role</button>

                                    </td>
                                </form>



                            </tr>
                            </tbody>

                        </table>
                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection
