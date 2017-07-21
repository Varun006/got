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
                            <h4>Add a new Answer set</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['url' => '/admin/answers' , 'method' => 'POST' , 'enctype' => 'multipart/form-data']) !!}

                        {{csrf_field()}}

                        <div class="form-group">
                            <label for="">Episode Number</label>
                            {{ Form::select('episode', $episodes, null, ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            <label for="description">Option One</label>
                            <input type="text" class="form-control" name="option_1">
                        </div>

                        <div class="form-group">
                            <label for="description">Option Two</label>
                            <input type="text" class="form-control" name="option_2">
                        </div>

                        <div class="form-group">
                            <label for="description">Option Three</label>
                            <input type="text" class="form-control" name="option_3">
                        </div>

                        <div class="form-group">
                            <label for="description">Option Four</label>
                            <input type="text" class="form-control" name="option_4">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@if(session()->has('success'))
@section('page-level-scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            swal({
                title: 'Success',
                text: "Answer set created successfully!",
                type: 'success',
                showCancelButton: true,
            });
        });
    </script>
@stop

@section('page-level-js')
    <script src="{{@asset('admin/assets/plugins/sweetalert/sweetalert.min.js')}}" type="text/javascript"></script>
@stop
@endif