@extends('layouts.admin.amaster')


@section('title'.'edit review page')
@section('keywords'.'')



@Section('content')

    <div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">
                    <h3>update review</h3>
            </div>
        </div>


<form action="{{route('admin_review_update',[$data[0]->id])}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group row mb-4">
        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">treatment title</label>
        <div class="col-xl-10 col-lg-9 col-sm-10">
            <input type="text" name="treatmenttitle" value="{{$data[0]->treatmenttitle}}"class="form-control"  placeholder="">
        </div>
    </div>
    <div class="form-group row mb-4">
        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">username</label>
        <div class="col-xl-10 col-lg-9 col-sm-10">
            <input type="text" name="username" value="{{$data[0]->username}}" class="form-control"  placeholder="">
        </div>
    </div> <div class="form-group row mb-4">
        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Subject</label>
        <div class="col-xl-10 col-lg-9 col-sm-10">
            <input type="text" name="subject" value="{{$data[0]->subject}}" class="form-control"  placeholder="">
        </div>
    </div> <div class="form-group row mb-4">
        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Comment</label>
        <div class="col-xl-10 col-lg-9 col-sm-10">
            <input type="text" name="comment" value="{{$data[0]->comment}}" class="form-control"  placeholder="">
        </div>
    </div>


    <div class="form-group row mb-4">
        <label class="col-xl-2 col-sm-3 col-sm-2 col-form-label">status</label>
        <div class="col-xl-10 col-lg-9 col-sm-10">
            <select   name="status" class="placeholder js-states form-control">
                <option  >{{$data[0]->status}}</option>
                <option value="false"> false</option>
                <option value="true">true</option>

            </select>
        </div>
    </div>



    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary mt-3">save</button>
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
