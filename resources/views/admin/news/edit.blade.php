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
                            <h4>Edit news</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        {!! Form::model($news , ['route' => ['news.update', $news] , 'enctype' => 'multipart/form-data']) !!}

                        {{csrf_field()}}
                        {{method_field('PUT')}}

                        <div class="form-group">
                            <label for="title">News Title</label>
                            <input type="text" value="{{ $news->title }}" class="form-control" id="title" name="title" />
                        </div>

                        <div class="form-group">
                            <label for="short_description">Short Description</label>
                            <textarea class="form-control" id="short_description"  name="short_description" rows="3">{!! $news->short_description !!}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="description">Long Description</label>
                            <textarea class="form-control" id="long_description" name="long_description" rows="6">{!! $news->long_description !!}</textarea>
                        </div>

                        <div class="form-group">
                            <p>Media Type</p>
                            <input type="radio" name="media_type" id="photo" value="photo" @if($news->media_type == 'photo') checked @endif> Photo<br>
                            <input type="radio" name="media_type" id="video" value="video" @if($news->media_type == 'video') checked @endif> Video<br>
                        </div>

                        <div class="form-group" id="photo_input">
                            <label for="exampleInputFile">News image</label>
                            <input type="file" name="photo" aria-describedby="fileHelp">
                        </div>

                        <div class="form-group" id="video_input">
                            <label for="title">News YT Video</label>
                            <input type="text" @if($news->media_type == 'video')value="{{$url}}" @endif class="form-control" name="video" />
                        </div>

                        @if($news->media_type == 'photo')
                        <div class="form-group">
                            <label for="current_image">Current Image</label>
                            <img src="{{$url}}">
                        </div>
                        @endif

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
                    text: "News edited successfully!",
                    type: 'success',
                    showCancelButton: true,
                });
            });
        </script>
    @endif

    <script>
        $(function() {
            $('#photo').click(function(){
                $('#video_input').val('').hide();
                $('#photo_input').show();
            });

            $('#video').click(function(){
                $('#photo_input').val('').hide();
                $('#video_input').show();
            });

            @if($news->media_type == 'photo')
                $('#photo').click();
            @else
                $('#video').click();
            @endif
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
            CKEDITOR.replace('short_description');
            CKEDITOR.replace('long_description');
        });
    </script>
@stop
