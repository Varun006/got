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
                            <h4>Add / Edit a new Twist Question</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['url' => '/admin/twists' , 'method' => 'POST' , 'enctype' => 'multipart/form-data']) !!}

                        {{csrf_field()}}

                        <div class="form-group">
                            <label for="">Episode Number</label>
                            {{ Form::select('episode', $episodes, $e_id, ['class' => 'form-control' , 'id' => 'drop']) }}
                        </div>

                        <div class="form-group">
                            <label for="description">Twist Question</label>
                            <textarea class="form-control" id="question" name="question" rows="3">{{ $twist->question }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Correct Answer</label>
                            {{ Form::select('correct_answer', $answers, null, ['class' => 'form-control']) }}
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
    @if(session()->has('success'))
        <script src="{{@asset('admin/assets/plugins/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            swal({
                title: 'Success',
                text: "Question created successfully!",
                type: 'success',
                showCancelButton: true,
            });
        });
    </script>
    @endif
    <script>
        $(function() {
            $("#drop").change(function () {
                var e_id = $('#drop').val();
                window.location.href = "http://got.dev/admin/twists/create?e_id="+e_id;
            });
        });
    </script>
@stop
@section('page-level-js')
    <script src="{{@asset('admin/assets/plugins/sweetalert/sweetalert.min.js')}}" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            "use strict"; // Start of use strict
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('question');
        });
    </script>
@stop
