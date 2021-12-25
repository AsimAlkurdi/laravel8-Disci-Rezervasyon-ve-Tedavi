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


<form action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="row mb-4 mt-3">
        <div class="col-sm-3 col-12">
            <div class="nav flex-column nav-pills mb-sm-0 mb-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active mb-2" id="v-pills-General-tab" data-toggle="pill" href="#v-pills-General" role="tab" aria-controls="v-pills-General" aria-selected="true">General</a>
                <a class="nav-link mb-2" id="v-pills-SmptEmail-tab" data-toggle="pill" href="#v-pills-SmptEmail" role="tab" aria-controls="v-pills-SmptEmail" aria-selected="false">Smpt Email</a>
                <a class="nav-link mb-2" id="v-pills-SocialMedia-tab" data-toggle="pill" href="#v-pills-SocialMedia" role="tab" aria-controls="v-pills-SocialMedia" aria-selected="false">Social Media</a>
                <a class="nav-link" id="v-pills-AboutUs-tab" data-toggle="pill" href="#v-pills-AboutUs" role="tab" aria-controls="v-pills-AboutUs" aria-selected="false">About Us</a>
                <a class="nav-link" id="v-pills-Contact-tab" data-toggle="pill" href="#v-pills-Contact" role="tab" aria-controls="v-pills-Contact" aria-selected="false">Contact page</a>
                <a class="nav-link" id="v-pills-References-tab" data-toggle="pill" href="#v-pills-References" role="tab" aria-controls="v-pills-References" aria-selected="false">References</a>
            </div>
        </div>

        <div class="col-sm-9 col-12">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-General" role="tabpanel" aria-labelledby="v-pills-General-tab">
                    <div class="form-group row mb-4">
                        <div class="col-xl-10 col-lg-9 col-sm-10">
                            <input type="hidden" name="id" value="{{$data->id}}" class="form-control"  placeholder="">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Title</label>
                        <div class="col-xl-10 col-lg-9 col-sm-10">
                            <input type="text" name="title" value="{{$data->title}}" class="form-control"  placeholder="">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label"> Keywords</label>
                        <div class="col-xl-10 col-lg-9 col-sm-10">
                            <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control"  placeholder="">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label"> Description</label>
                        <div class="col-xl-10 col-lg-9 col-sm-10">
                            <input type="text" name="description" value="{{$data->description}}" class="form-control"  placeholder="">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Company</label>
                        <div class="col-xl-10 col-lg-9 col-sm-10">
                            <input type="text" value="{{$data->company}}" name="company" class="form-control"  placeholder="">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Address</label>
                        <div class="col-xl-10 col-lg-9 col-sm-10">
                            <input type="text" value="{{$data->address}}" name="address" class="form-control"  placeholder="">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Phone</label>
                        <div class="col-xl-10 col-lg-9 col-sm-10">
                            <input type="text" value="{{$data->phone}}" name="phone" class="form-control"  placeholder="">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Fax</label>
                        <div class="col-xl-10 col-lg-9 col-sm-10">
                            <input type="text" value="{{$data->fax}}" name="fax" class="form-control"  placeholder="">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Email</label>
                        <div class="col-xl-10 col-lg-9 col-sm-10">
                            <input type="text" value="{{$data->email}}" name="email" class="form-control"  placeholder="">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Status</label>
                        <div class="col-xl-10 col-lg-9 col-sm-10">
                            <select   name="status" class="placeholder js-states form-control">
                                <option  >{{$data->status}}</option>
                                <option value="false">false</option>
                                <option value="true">true</option>

                            </select>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="v-pills-SmptEmail" role="tabpanel" aria-labelledby="v-pills-SmptEmail-tab">
                    <div class="form-group row mb-4">
                        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Smpt Server</label>
                        <div class="col-xl-10 col-lg-9 col-sm-10">
                            <input type="text" value="{{$data->smptserver}}" name="smptserver" class="form-control"  placeholder="">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Smpt Email</label>
                        <div class="col-xl-10 col-lg-9 col-sm-10">
                            <input type="text" value="{{$data->smptemail}}" name="smptemail" class="form-control"  placeholder="">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Smpt Password</label>
                        <div class="col-xl-10 col-lg-9 col-sm-10">
                            <input type="text" value="{{$data->smptpassword}}" name="smptpassword" class="form-control"  placeholder="">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Smpt Port</label>
                        <div class="col-xl-10 col-lg-9 col-sm-10">
                            <input type="number" value="{{$data->smptport}}" name="smptport" class="form-control"  placeholder="">
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="v-pills-SocialMedia" role="tabpanel" aria-labelledby="v-pills-SocialMedia-tab">
                    <div class="form-group row mb-4">
                        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Facebook</label>
                        <div class="col-xl-10 col-lg-9 col-sm-10">
                            <input type="text" value="{{$data->facebook}}" name="facebook" class="form-control"  placeholder="">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Instagram</label>
                        <div class="col-xl-10 col-lg-9 col-sm-10">
                            <input type="text" value="{{$data->instagram}}" name="instagram" class="form-control"  placeholder="">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Twitter</label>
                        <div class="col-xl-10 col-lg-9 col-sm-10">
                            <input type="text" value="{{$data->twitter}}" name="twitter" class="form-control"  placeholder="">
                        </div>
                    </div>


                    <div class="form-group row mb-4">
                        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Youtube</label>
                        <div class="col-xl-10 col-lg-9 col-sm-10">
                            <input type="text" value="{{$data->youtube}}" name="youtube" class="form-control"  placeholder="">
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="v-pills-AboutUs" role="tabpanel" aria-labelledby="v-pills-AboutUs-tab">
                    <div class="form-group row mb-4">
                        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">About us</label>
                        <div class="col-xl-10 col-lg-9 col-sm-10">

                            <textarea id="aboutus"  name="aboutus" >{{$data->aboutus}} </textarea>

                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="v-pills-Contact" role="tabpanel" aria-labelledby="v-pills-Contact-tab">
                    <div class="form-group row mb-4">
                        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Contact</label>
                        <div class="col-xl-10 col-lg-9 col-sm-10">

                            <textarea id="contact"  name="contact" >{{$data->contact}} </textarea>

                        </div>        </div>
                </div>
                <div class="tab-pane fade" id="v-pills-References" role="tabpanel" aria-labelledby="v-pills-References-tab">
                    <div class="form-group row mb-4">
                        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">References</label>
                        <div class="col-xl-10 col-lg-9 col-sm-10">

                            <textarea id="references"  name="references" >{{$data->references}} </textarea>
                        </div>        </div>
                    <script>
                        $(document).ready(function() {
                            $('#references').summernote();
                            $('#contact').summernote();
                            $('#aboutus').summernote();
                        });
                    </script>

                </div>
            </div>
        </div>
    </div>
















        <div class="form-group ">
        <div class="col-xl-10">
            <button type="submit" class="btn btn-primary mt-3">Save</button>
        </div>
         </div>`
</form>
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
