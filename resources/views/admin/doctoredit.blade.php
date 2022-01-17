@extends('layouts.admin.amaster')


@section('title'.'edit home page')
@section('keywords'.'')



@Section('content')

    <div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">
                    <h3>update the treatment </h3>
            </div>
        </div>


<form action="{{url('/')}}/admin/doctors/update/{{$data->id}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group row mb-4">
        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Name</label>
        <div class="col-xl-10 col-lg-9 col-sm-10">
            <input type="text" name="name" value="{{$data->name}}"class="form-control"  placeholder=" {{$data->name}}">

        </div>
    </div>
    <div class="form-group row mb-4">
        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label"> Specialty</label>
        <div class="col-xl-10 col-lg-9 col-sm-10">
            <input type="text" name="specialty" value="{{$data->specialty}}" class="form-control"  placeholder="{{$data->specialty}}">
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
        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">user name</label>
        <div class="col-xl-10 col-lg-9 col-sm-10">
            <select   name="usersid" class="placeholder js-states form-control">
                <option value="{{$data->usersid}}" >{{$data->userr->name}}</option>
                @foreach($datas as $ca)
                    <option value="{{$ca->id}}">{{$ca->name}}</option>
                @endforeach
            </select>
        </div>
    </div>


    <div class="form-group row mb-4">
        <label class="col-xl-2 col-sm-3 col-sm-2 col-form-label">status</label>
        <div class="col-xl-10 col-lg-9 col-sm-10">
            <select   name="status" class="placeholder js-states form-control">
                <option  >{{$data->status}}</option>
                <option value="false"> false</option>
                <option value="true">true</option>

            </select>
        </div>
    </div>

    <div class="form-group row mb-4">
        <label class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Image</label>
        <div class="col-xl-10 col-lg-9 col-sm-10">
            <input type="hidden" name="image2" value="{{$data->image}}"  class="form-control">
        <input type="file" name="image"  class="form-control">
   </div>
   </div>

    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary mt-3">Lets Go</button>
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
