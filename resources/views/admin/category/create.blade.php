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
                        <h4>Create a new Category</h4>
                    </div>
                </div>
                <div class="panel-body">                   
                	{!! Form::open(['url' => '/admin/category' , 'method' => 'POST']) !!}
                    	{{csrf_field()}}
                        <div class="form-group">
                            <label for="">Category Name</label>
                            <input type="text" class="form-control" name="name" placeholder="some category">
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
		    text: "Category created succesfully!",
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