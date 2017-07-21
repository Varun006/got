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
                            <h4>Add a new Product</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['url' => '/admin/products' , 'method' => 'POST' , 'enctype' => 'multipart/form-data']) !!}
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="">Product Name</label>
                            <input type="text" class="form-control" name="name" placeholder="GOT Monopoly">
                        </div>

                        <div class="form-group">
                            <label for="">Category</label>
                            {{ Form::select('category', $categories, null, ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            <label for="">Merchandise Type</label>
                            {{ Form::select('merchandise_type', $merchandises, null, ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Buy Now Link</label>
                            <input type="text" class="form-control" id="link" name="link" aria-describedby="link">
                        </div>

                        <div class="form-group">
                            <label for="description">Short Description</label>
                            <textarea class="form-control" id="short_description" name="description" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Product image</label>
                            <input type="file" id="exampleInputFile" name="photo" aria-describedby="fileHelp">
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
                text: "Product created succesfully!",
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