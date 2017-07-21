@extends('layouts.admin.main')

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
                            <h4>Edit Sub Category</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                    {!! Form::model($subCategory , ['route' => ['subCategory.update', $subCategory]]) !!}
                    <!-- <form method="POST" action="/dashboard/categories"> -->
                        {{csrf_field()}}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="">Sub Category Name</label>
                            <input type="text" class="form-control" value="{{$subCategory->name}}" name="name" placeholder="meta tag name">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <!-- </form> -->
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
                text: "Sub Category edited successfully!",
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