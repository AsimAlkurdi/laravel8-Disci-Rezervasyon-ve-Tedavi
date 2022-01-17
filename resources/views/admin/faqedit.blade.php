@extends('layouts.admin.amaster')


@section('title'.'edit Faq page')
@section('keywords'.'')



@Section('content')

    <div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">
                    <h3>Update Faq</h3>
            </div>
        </div>


<form action="{{url('/')}}/admin/faq/update/{{$data->id}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group row mb-4">
        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Position</label>
        <div class="col-xl-10 col-lg-9 col-sm-10">
            <input type="text" value="{{$data->position}}" name="position" class="form-control"  placeholder="">{{$data->position}}
        </div>
    </div>


    <div class="form-group row mb-4">
        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Question</label>
        <div class="col-xl-10 col-lg-9 col-sm-10">
            <textarea type="text" name="question" value="{{$data->question}}" class="form-control"  placeholder="">{{$data->question}}</textarea>
            <script>
                CKEDITOR.replace( 'question' );
            </script>
        </div>
    </div>
    <div class="form-group row mb-4">
        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Answer</label>
        <div class="col-xl-10 col-lg-9 col-sm-10">
            <textarea type="text" name="answer" value="{{$data->answer}}" class="form-control"  placeholder="">{{$data->answer}}</textarea>
            <script>
                CKEDITOR.replace( 'answer' );
            </script>
        </div>
    </div>

    <div class="form-group row mb-4">
        <label class="col-xl-2 col-sm-3 col-sm-2 col-form-label">status</label>
        <div class="col-xl-10 col-lg-9 col-sm-10">
            <select   value="{{$data->status}}"  name="status" class="placeholder js-states form-control">
                <option  >{{$data->status}}</option>
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
