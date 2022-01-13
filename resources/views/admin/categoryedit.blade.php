@extends('layouts.admin.amaster')


@section('title'.'edit category page')
@section('keywords'.'')



@Section('content')

    <div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">
                    <h3>update category</h3>
            </div>
        </div>


<form action="{{url('/')}}/admin/category/update/{{$category[0]->id}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group row mb-4">
        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">title</label>
        <div class="col-xl-10 col-lg-9 col-sm-10">
            <input type="text" name="title" value="{{$category[0]->title}}"class="form-control"  placeholder="">
        </div>
    </div>
    <div class="form-group row mb-4">
        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">keywords</label>
        <div class="col-xl-10 col-lg-9 col-sm-10">
            <input type="text" name="keywords" value="{{$category[0]->keywords}}" class="form-control"  placeholder="">
        </div>
    </div>
    <div class="form-group row mb-4">
        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">description</label>
        <div class="col-xl-10 col-lg-9 col-sm-10">
            <div id="basic" class="row layout-spacing  layout-top-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">

                        <div class="widget-content widget-content-area">
                                     <textarea value="{{$category[0]->description}}" id="demo1" name="detail">
{{$category[0]->description}}
                                    </textarea>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <div class="form-group row mb-4">
        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">usd_id</label>
        <div class="col-xl-10 col-lg-9 col-sm-10">
            <select   name="usd_id" class="placeholder js-states form-control">
                @if($category[0]->usd_id ==0)
                    <option value="0" selected="selected" >select..</option>
                @else
                    <option value="{{$category[0]->usd_id}}" >{{$category[0]->categoryusd}}</option>
                @endif
                @foreach($data as $ca)
                <option value="{{$ca->id}}">{{ \App\Http\Controllers\admin\CategoryController::getParentTree($ca,$ca->title)  }}</option>
                @endforeach
            </select>
        </div>
    </div>


    <div class="form-group row mb-4">
        <label class="col-xl-2 col-sm-3 col-sm-2 col-form-label">status</label>
        <div class="col-xl-10 col-lg-9 col-sm-10">
            <select   name="status" class="placeholder js-states form-control">
                <option  >{{$category[0]->status}}</option>
                <option value="false"> false</option>
                <option value="true">true</option>

            </select>
        </div>
    </div>


    <div class="form-group row mb-4">
        <label class="col-xl-2 col-sm-3 col-sm-2 col-form-label">image</label>
        <div class="col-xl-10 col-lg-9 col-sm-10">
            <input type="hidden" name="image2" value="{{$category[0]->image}}"  class="form-control">
        <input type="file" name="image"  class="form-control">
   </div>
   </div>

    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary mt-3">حفظ</button>
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
