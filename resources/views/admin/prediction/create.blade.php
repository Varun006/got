@extends('admin.layout.main')

@section('page-level-css')
    <link href="{{@asset('admin/assets/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css"/>
@stop

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Add a Prediction</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['url' => '/admin/prediction' , 'method' => 'POST' , 'enctype' => 'multipart/form-data']) !!}

                        {{csrf_field()}}

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" />
                        </div>

                        <div class="form-group">
                            <label for="short_description">Description</label>
                            <textarea class="form-control" id="short_description" name="description" rows="3"></textarea>
                        </div>

                        <div class="form-group" id="photo_input">
                            <label for="exampleInputFile">Image</label>
                            <input type="file" name="photo" aria-describedby="fileHelp">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop


@section('page-level-scripts')
    <script src="{{@asset('admin/assets/plugins/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
    @if(session()->has('success'))
        <script type="text/javascript">
            $(document).ready(function(){
                swal({
                    title: 'Success',
                    text: "Prediction added successfully!",
                    type: 'success',
                    showCancelButton: true,
                });
            });
        </script>
    @endif

@stop
@section('page-level-js')
    <script src="{{@asset('admin/assets/plugins/sweetalert/sweetalert.min.js')}}" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            "use strict"; // Start of use strict
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('description');
        });
    </script>
@stop
