@extends('layouts.admin.amaster')


@section('title'.'add category page')
@section('keywords'.'')



@Section('content')

    <div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">
                    <h3>Add New Question</h3>
            </div>
        </div>


<form action="{{route('admin_faq_store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group row mb-4">
        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Position</label>
        <div class="col-xl-10 col-lg-9 col-sm-10">
            <input type="text" value="0" name="position" class="form-control"  placeholder="">
        </div>
    </div>


    <div class="form-group row mb-4">
        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Question</label>
        <div class="col-xl-10 col-lg-9 col-sm-10">
            <textarea type="text" name="question" class="form-control"  placeholder=""></textarea>
            <script>
                CKEDITOR.replace( 'question' );
            </script>
        </div>
    </div>
    <div class="form-group row mb-4">
        <label  class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Answer</label>
        <div class="col-xl-10 col-lg-9 col-sm-10">
            <textarea type="text" name="answer" class="form-control"  placeholder=""></textarea>
            <script>
                CKEDITOR.replace( 'answer' );
            </script>
        </div>
    </div>

    <div class="form-group row mb-4">
        <label class="col-xl-2 col-sm-3 col-sm-2 col-form-label">status</label>
        <div class="col-xl-10 col-lg-9 col-sm-10">
            <select   name="status" class="placeholder js-states form-control">
                <option>select..</option>
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

@endsection
