@extends('admin.layout.main')

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
                            <h4>Dead Listing</h4>
                            <a href="/admin/dead/create">
                                <button type="button" class="btn btn-primary w-md m-b-5">Add a dead character</button>
                            </a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="products" class="table table-bordered table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Time of death</th>
                                    <th>Added On</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($deads as $single)
                                    <tr>
                                        <td>{{$single->name}}</td>
                                        <td>{{$single->role}}</td>
                                        <td>{{$single->execution}}</td>
                                        <td>{{$single->created_at->toFormattedDateString()}}</td>
                                        <td>
                                            <a href="/admin/dead/{{$single->id}}/edit">
                                                <button type="button" class="btn btn-info w-md m-b-5">Edit</button>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <button type="button" id="{{$single->id}}" class="btn btn-danger delete w-md m-b-5">Delete</button>
                                            </a>
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
            $('#products').DataTable({
                "dom": "<'row'<'col-sm-6'l><'col-sm-6'f>>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
                "lengthMenu": [[6, 25, 50, -1], [6, 25, 50, "All"]],
                "iDisplayLength": 6
            });

            $('.delete').click(function(){
                var id = $(this).attr('id');
                swal({
                        title: "Are you sure?",
                        text: "Do you want to delete this dead character from listing?",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, delete it!",
                        closeOnConfirm: true
                    },
                    function(){
                        $.ajax({
                            url : '/admin/dead/delete',
                            data: {'id' : id , "_token": "{{ csrf_token() }}" , '_method' : 'delete'},
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
                                        toastr.success('Dead Character deleted successfully.');
                                    }, 1300);
                                    setTimeout(function () {
                                        $("."+id).fadeOut();
                                    }, 1600);
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