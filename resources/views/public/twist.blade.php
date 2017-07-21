@extends('public.layout.main')

@section('extra-css')
    <link href="{{@asset('got-css/atul.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{@asset('admin/assets/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css"/>
@stop

@section('body')
    <div class="header remove-bg" id="head">
        @include('public.layout.header')
    </div>

    <div class="content"><!--Content Section-->
        <div class="twist-section">
            <div class="container">
                <h1 class="col-lg-12"><img src="{{@asset('images/icon7.png')}}"> Guess the <span>twist</span></h1>

                <div class="col-lg-6">
                    <img src="{{@asset('images/thrones1-master768-v2.jpg')}}">
                </div>

                <div class="col-md-6 col-sm-6">
                    <div>
                        <p>
                            Guess the twist for all episodes, and the user with max number of correct guess will receive a special gift from us. You receive 1 point for each correct guess, no negative points.<br><br>
                            <strong style="color: #FAC832">
                                    Remember, you can participate only once per episode.
                            </strong>
                        </p>

                        <h4>Twist Question for S7E02</h4>

                        <form method="POST" action="/twist/user/guess">
                            {{csrf_field()}}
                            <p>
                                {!! $question->question !!}
                            </p>

                            <ul>
                                @foreach($answers as $answer)
                                    @if($loop->first)
                                        <li><input type="radio" name="answer" value="{{ $answer->id }}" checked><label>{{ $answer->option }}</label></li>
                                    @else
                                        <li><input type="radio" name="answer" value="{{ $answer->id }}"><label>{{ $answer->option }}</label></li>
                                    @endif
                                @endforeach

                                <input type="hidden" class="form-control" name="episode" value="{{ $question->episode }}">
                                <li>
                                    <button type="submit">Submit</button>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div><!--End King Of The North Section-->
    </div>
@stop

@section('extra-js')
    <script src="{{@asset('admin/assets/plugins/sweetalert/sweetalert.min.js')}}" type="text/javascript"></script>
@stop

@section('extra-scripts')
    <script>
        $(function(){
            $('.detect').removeClass('active');
            $('#twist').addClass('active');
        });
    </script>

    @if(session()->has('success'))
        <script type="text/javascript">
            $(document).ready(function(){
                swal({
                    title: 'Success',
                    text: "Your guess has been submitted!",
                    type: 'success',
                    showCancelButton: true,
                });
            });
        </script>
    @endif

    @if(session()->has('error'))
        <script type="text/javascript">
            $(document).ready(function(){
                swal({
                    title: 'OOPS!',
                    text: "You have already participated in this episode's contest.",
                    type: 'error',
                    showCancelButton: true,
                });
            });
        </script>
    @endif
@stop