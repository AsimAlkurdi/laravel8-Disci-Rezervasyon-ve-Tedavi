@extends('layouts.admin.amaster')


@section('title'.'edit setting page')
@section('keywords'.'')



@Section('content')

    <div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="page-header">
            <div class="page-title">
                    <h3>update the setting </h3>
            </div>
        </div>



    <div class="row mb-4 mt-3">
        <div class="col-sm-3 col-12">
            <div class="nav flex-column nav-pills mb-sm-0 mb-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active mb-2" id="v-pills-Randevu-tab" data-toggle="pill" href="#v-pills-Randevu" role="tab" aria-controls="v-pills-Randevu" aria-selected="true">Randevu</a>
                <a class="nav-link mb-2" id="v-pills-Procsess-tab" data-toggle="pill" href="#v-pills-Procsess" role="tab" aria-controls="v-pills-Procsess" aria-selected="false">Procsess</a>
            </div>
        </div>

        <div class="col-sm-9 col-12">
            <div class="tab-content" id="v-pills-tabContent">
                <form action="{{url('/')}}/admin/randevu/update/{{$data->id}}" method="post" enctype="multipart/form-data">
                    @csrf



                    <div class="tab-pane fade show active" id="v-pills-Randevu" role="tabpanel" aria-labelledby="v-pills-Randevu-tab">
                        <div class="form-group row mb-4">
                            <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label"> Name</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <input type="text" name="name" value="{{$data->name}}" class="form-control"  placeholder="{{$data->name}}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label"> Treatment</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <input type="text" name="treatmentid" value="{{$data->treatment->title}}" class="form-control"  placeholder="{{$data->treatment}}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label"> Doctor</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <input type="text" name="doctorid" value="{{$data->doctor->name}}" class="form-control"  placeholder="{{$data->doctor->name}}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label"> Email</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <input type="text" name="email" value="{{$data->email}}" class="form-control"  placeholder="{{$data->email}}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label"> Phone</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <input type="text" name="phone" value="{{$data->phone}}" class="form-control"  placeholder="{{$data->phone}}">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Time</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <input type="text" name="time" value="{{$data->time}}" class="form-control"  placeholder="{{$data->time}}">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label"> Date</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <input type="date" name="date" value="{{$data->date}}" class="form-control"  placeholder="{{$data->date}}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Message</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <textarea type="text"name="message" value="{{$data->message}}" class="form-control"  placeholder="">{{$data->message}}</textarea>
                                <script>
                                    CKEDITOR.replace( 'message' );
                                </script>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Note</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <textarea type="text" name="note" value="{{$data->note}}" class="form-control"  placeholder="">{{$data->note}}</textarea>
                                <script>
                                    CKEDITOR.replace( 'note' );
                                </script>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-xl-2 col-sm-3 col-sm-2 col-form-label">status</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <select   name="status" class="placeholder js-states form-control">
                                    <option  >{{$data->status}}</option>
                                    <option value="expecting"> expecting</option>
                                    <option value="accepted">accepted</option>
                                    <option value="completed"> completed</option>
                                    <option value="processing">processing</option>

                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="form-group ">
                        <div class="col-xl-10">
                            <button type="submit" class="btn btn-primary mt-3">Save</button>
                        </div>
                    </div>`
                </form>




                <form action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="tab-pane fade" id="v-pills-Procsess" role="tabpanel" aria-labelledby="v-pills-Procsess-tab">


                        <div class="form-group row mb-4">
                            <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label"> Treatment</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <input type="text" name="treatmentid" value="{{$datalist->treatment->title}}" class="form-control"  placeholder="{{$datalist->treatment->title}}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label"> Doctor</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <input type="text" name="doctorid" value="{{$datalist->doctor->name}}" class="form-control"  placeholder="{{$datalist->doctor->name}}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label"> Price</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <input type="text" name="price" value="{{$datalist->price}}" class="form-control"  placeholder="{{$datalist->price}}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label"> Payment</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <input type="text" name="payment" value="{{$datalist->payment}}" class="form-control"  placeholder="{{$datalist->payment}}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Note</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <textarea type="text" name="note" value="{{$datalist->note}}" class="form-control"  placeholder="">{{$datalist->note}}</textarea>
                                <script>
                                    CKEDITOR.replace( 'note' );
                                </script>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-xl-2 col-sm-3 col-sm-2 col-form-label">status</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <select   name="status" class="placeholder js-states form-control">
                                    <option value="{{$datalist->status}}"  >{{$datalist->status}}</option>
                                    <option value="expecting"> expecting</option>
                                    <option value="accepted">accepted</option>
                                    <option value="completed"> completed</option>
                                    <option value="processing">processing</option>

                                </select>
                            </div>
                        </div>

                </div>
                   <div class="form-group ">
                    <div class="col-xl-10">
                        <button type="submit" class="btn btn-primary mt-3">Save</button>
                    </div>
                </div>
                </form>
                 </div>
        </div>
    </div>

















    </div>

</div>

    <script>
        $(".placeholder").select2({
            placeholder: "Make a Selection",
            allowClear: true
        });
    </script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{{url('/')}}/assets/admin/assets/js/scrollspyNav.js"></script>
    <script src="{{url('/')}}/assets/admin/plugins/file-upload/file-upload-with-preview.min.js"></script>
    <script src="{{url('/')}}/assets/admin/plugins/editors/quill/quill.js"></script>
    <script src="{{url('/')}}/assets/admin/plugins/editors/quill/custom-quill.js"></script>
    <script>
        //First upload
        var firstUpload = new FileUploadWithPreview('myFirstImage')
        //Second upload
    </script>
    <script>
        new SimpleMDE({
            element: document.getElementById("demo1"),
            spellChecker: false,
        });
    </script>
    <script>
        // Autosaving
        new SimpleMDE({
            element: document.getElementById("demo2"),
            spellChecker: false,
            autosave: {
                enabled: false,
                unique_id: "demo2",
            },
        });
    </script>

@endsection
