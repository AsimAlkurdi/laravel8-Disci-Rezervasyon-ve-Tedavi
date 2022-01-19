@Section('content')

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing">


                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

                    <div class="widget widget-activity-four">

                        <div class="widget-heading">
                            <h5 class="">Recent Randevus</h5>
                        </div>

                        <div class="widget-content">

                            <div class="mt-container mx-auto">
                                <div class="timeline-line">
                                    @foreach($randevu as $ca)
                                    <div class="item-timeline timeline-primary">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <a href="{{url('/')}}/admin/randevu/show/{{$ca->id}}" >    <p><span>{{$ca->treatment->title}}</span> : {{$ca->user->name}}</p></a>
                                                <span class="badge"> <td>{{$ca->status}}</td></span>
                                            <p class="t-time"> <td>{{$ca->created_at}}</td></p>
                                        </div>
                                    </div>
                                    @endforeach



                                </div>
                            </div>

                            <div class="tm-action-btn">
                                <button  class="btn"><a href="{{route('admin_randevu')}}">View All</a> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

                    <div class="widget widget-activity-four">

                        <div class="widget-heading">
                            <h5 class="">Recent Message</h5>
                        </div>

                        <div class="widget-content">

                            <div class="mt-container mx-auto">
                                <div class="timeline-line">
                                    @foreach($message as $ca)
                                    <div class="item-timeline timeline-primary">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <a href="{{url('/')}}/admin/messages/edit/{{$ca->id}}"> <p><span>{{$ca->name}}</span> : {{$ca->subject}}</p></a>
                                            <span class="badge"> <td>:{{$ca->status}}</td></span>
                                            <p class="t-time"> <td>:{{$ca->created_at}}</td></p>
                                        </div>
                                    </div>
                                    @endforeach



                                </div>
                            </div>

                            <div class="tm-action-btn">
                                <button  class="btn"><a href="{{route('admin_message')}}">View All</a> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

                    <div class="widget widget-activity-four">

                        <div class="widget-heading">
                            <h5 class="">Recent Comment</h5>
                        </div>

                        <div class="widget-content">

                            <div class="mt-container mx-auto">
                                <div class="timeline-line">
                                    @foreach($comment as $ca)
                                    <div class="item-timeline timeline-primary">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <a href="{{route('admin_review_show',['id' => $ca->id])}}" ><p><span>{{$ca->user->name}}</span> : {{$ca->subject}}</p></a>
                                            </a>
                                            <span class="badge"> <td>:{{$ca->status}}</td></span>
                                            <p class="t-time"> <td>:{{$ca->created_at}}</td></p>
                                        </div>
                                    </div>
                                    @endforeach



                                </div>
                            </div>

                            <div class="tm-action-btn">
                                <button  class="btn"><a href="{{route('admin_review')}}">View All</a> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></button>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-table-two">

                        <div class="widget-heading">
                            <h5 class="">Recent Treatments</h5>
                        </div>

                        <div class="widget-content">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th><div class="th-content">id</div></th>
                                        <th><div class="th-content">Category</div></th>
                                        <th><div class="th-content">title</div></th>
                                        <th><div class="th-content th-heading">Price</div></th>
                                        <th><div class="th-content">Status</div></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($treatment as $treatment)

                                    <tr>
                                        <td><div class="td-content customer-name">{{$treatment->id}}</div></td>
                                        <td><div class="td-content product-brand text-primary">{{ \App\Http\Controllers\admin\CategoryController::getParentTree($treatment->category ,$treatment->category->title) }}</div></td>
                                        <td><div class="td-content product-invoice"><a href="{{url('/')}}/admin/treatments/edit/{{$treatment->id}}">{{$treatment->title}}  </a></div></td>
                                        <td><div class="td-content pricing"><span class="">{{$treatment->price}}</span></div></td>
                                        <td><div class="td-content"><span class="badge badge-success">{{$treatment->status}}</span></div></td>
                                    </tr>

                                    @endforeach
                                    </tbody>

                                </table>
                                <div class="tm-action-btn">
                                    <a href="{{url('/')}}/admin/treatments">View All</a> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-table-three">

                        <div class="widget-heading">
                            <h5 class="">Users</h5>
                        </div>

                        <div class="widget-content">
                            <div class="table-responsive">
                                <table class="table table-scroll">
                                    <thead>
                                    <tr>
                                        <th><div class="th-content">NAME</div></th>
                                        <th><div class="th-content th-heading">Email</div></th>
                                        <th><div class="th-content th-heading">Phone</div></th>
                                        <th><div class="th-content">Role</div></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($user as $ca)
                                    <tr>
                                        <td><div class="td-content product-name"><div class="align-self-center"><p class="prd-category text-primary">{{$ca->name}}</p></div></div></td>
                                        <td><div class="td-content"><span class="contact-email">{{$ca->email}}</span></div></td>
                                        <td><div class="td-content"><span class="contact-phone">{{$ca->phone}}</span></div></td>
                                        <td><div class="td-content"><a href="{{url('/')}}/admin/user/show/{{$ca->id}}" class="text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-right"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg> </a>
                                                @foreach($ca->role as $rw)
                                                        {{$rw->name}}
                                                    @endforeach
                                                    <a href="{{route('admin_user_role',['id'=>$ca->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 width=800 height=600')">
                                                        <i class="far fa-book"> </i>
                                                    </a></div></td>
                                    </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                                <div class="tm-action-btn">
                                    <a href="{{url('/')}}/admin/user  ">View All</a> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </div>
    <!--  END CONTENT AREA  -->
@endsection
