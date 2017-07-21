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
                            <h4>Create a new Variation</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['url' => '/admin/variations' , 'method' => 'POST']) !!}
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="">Variation Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Kilos, liter, Grams, etc.">
                        </div>
                        <div class="form-group">
                            <label for="">Variation First Value</label>
                            <input type="text" class="form-control" name="v1" placeholder="1 KG, 1 liter, 100 Grams, etc.">
                        </div>
                        <div class="form-group">
                            <label for="">Variation Second Value</label>
                            <input type="text" class="form-control" name="v2" placeholder="2 KG, 2 liter, 500 Grams, etc.">
                        </div>
                        <div class="form-group">
                            <label for="">Variation Third Value</label>
                            <input type="text" class="form-control" name="v3" placeholder="5 KG, 3 liter, 750 Grams, etc.">
                        </div>
                        <div class="form-group">
                            <label for="">Variation Fourth Value</label>
                            <input type="text" class="form-control" name="v4" placeholder="10 KG, 3 liter, 750 Grams, etc.">
                        </div>
                        <div class="form-group">
                            <label for="">Variation Fifth Value</label>
                            <input type="text" class="form-control" name="v5" placeholder="10 KG, 3 liter, 750 Grams, etc.">
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
                text: "Variation created succesfully!",
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