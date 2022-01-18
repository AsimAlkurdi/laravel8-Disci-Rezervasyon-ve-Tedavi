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


<form action="{{url('/')}}/admin/treatments/update/{{$data[0]->id}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group row mb-4">
        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">title</label>
        <div class="col-xl-10 col-lg-9 col-sm-10">
            <input type="text" name="title" value="{{$data[0]->title}}"class="form-control"  placeholder="">
        </div>
    </div>
    <div class="form-group row mb-4">
        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label"> keywords</label>
        <div class="col-xl-10 col-lg-9 col-sm-10">
            <input type="text" name="keywords" value="{{$data[0]->keywords}}" class="form-control"  placeholder="">
        </div>
    </div>
    <div class="form-group row mb-4">
        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">description</label>
        <div class="col-xl-10 col-lg-9 col-sm-10">
            <div id="autosaving" class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">

                        <div class="widget-content widget-content-area">

                                <textarea value="{{$data[0]->description}}" id="demo2" name="description">
{{$data[0]->description}}
                                </textarea>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row mb-4">
        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">detail</label>
        <div class="col-xl-10 col-lg-9 col-sm-10">

            <div id="basic" class="row layout-spacing  layout-top-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">

                        <div class="widget-content widget-content-area">
                                    <textarea value="{{$data[0]->detail}}" id="demo1" name="detail">
{{$data[0]->detail}}
                                    </textarea>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <div class="form-group row mb-4">
        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">price</label>
        <div class="col-xl-10 col-lg-9 col-sm-10">
            <input type="number" value="{{$data[0]->price}}" name="price" class="form-control"  placeholder="">
        </div>
    </div>

        <div class="form-group row mb-4">
        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">categoryid</label>
        <div class="col-xl-10 col-lg-9 col-sm-10">
            <select   name="categoryid" class="placeholder js-states form-control">
                <option value="{{$data[0]->categoryid}}" >{{$data[0]->category}}</option>
                @foreach($category as $ca)
                <option value="{{$ca->id}}">{{$ca->title}}</option>
                @endforeach
            </select>
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

    <div class="form-group row mb-4">
        <label class="col-xl-2 col-sm-3 col-sm-2 col-form-label">image</label>
        <div class="col-xl-10 col-lg-9 col-sm-10">
            <input type="hidden" name="image2" value="{{$data[0]->image}}"  class="form-control">
        <input type="file" name="image"  class="form-control">
   </div>
   </div>

    <div class="form-group row">
        <div class="col-sm-10">
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
