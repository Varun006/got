@extends('layouts.admin.main')

@section('page-level-css')
    <link href="{{@asset('admin/assets/plugins/datatables/dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
@stop

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Sub Category Listing</h4>
                            <a href="/admin/subCategory/create">
                                <button type="button" class="btn btn-primary w-md m-b-5">Add a new sub category</button>
                            </a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="subCategory" class="table table-bordered table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Created on</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($subCategories as $subCategory)
                                    <tr>
                                        <td>{{$subCategory->name}}</td>
                                        <td>{{$subCategory->created_at->toFormattedDateString()}}</td>
                                        <td>
                                            <a href="/admin/subCategory/{{$subCategory->id}}/edit">
                                                <button type="button" class="btn btn-info w-md m-b-5">Edit</button>
                                            </a>
                                            {{--<a href="javascript:void(0);">    --}}
                                            {{--<button type="button" id="{{$tag->id}}" class="btn btn-danger delete w-md m-b-5">Delete</button>--}}
                                            {{--</a>                                         --}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('page-level-scripts')
    <script src="{{@asset('admin/assets/plugins/datatables/dataTables.min.js')}}" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"></script>
@stop

@section('page-level-js')
    <script type="text/javascript">
        $(function(){
            "use strict"; // Start of use strict
            $('#subCategory').DataTable({
                "dom": "<'row'<'col-sm-6'l><'col-sm-6'f>>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
                "lengthMenu": [[6, 25, 50, -1], [6, 25, 50, "All"]],
                "iDisplayLength": 6
            });

            $('.delete').click(function(){
                var id = $(this).attr('id');
                swal({
                        title: "Are you sure?",
                        text: "Do you want to delete this sub-category?",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, delete it!",
                        closeOnConfirm: false
                    },
                    function(){
                        $.ajax({
                            url : '/admin/subCategory/delete/',
                            data: {'id' : id , "_token": "{{ csrf_token() }}"},
                            type: 'POST',
                            success: function(resp){
                                if(resp.success) {
                                    setTimeout(function () {
                                        toastr.options = {
                                            closeButton: true,
                                            progressBar: true,
                                            showMethod: 'slideDown',
                                            timeOut: 4000,
                                            positionClass: "toast-top-right"
                                        };
                                        toastr.success('Category deleted successfully.');
                                    }, 1300);
                                    setTimeout(function () {
                                        location.reload(true);
                                    }, 1300);
                                }
                            }
                        });
                    });
            });

            @if(session()->has('toastr'))
                setTimeout(function () {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000,
                    positionClass: "toast-top-right"
                };
                toastr.success('{{session()->get('toastr')}}');
            }, 1300);
            @endif
        });
    </script>
@stop