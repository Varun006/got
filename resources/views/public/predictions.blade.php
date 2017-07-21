@extends('public.layout.main')

@section('extra-css')
    <link href="{{@asset('got-css/atul.css')}}" rel="stylesheet" type="text/css"/>
@stop

@section('body')
    <div class="header remove-bg" id="head">
        @include('public.layout.header')
    </div>

    <div class="content"><!--Content Section-->
        <div class="container character-details">
            @foreach($predictions as $prediction)
                <div class="container character-details">
                    @if($prediction->photo != null)
                        <div class="col-md-12 col-sm-12">
                            <img src="{{ $prediction->url }}">
                        </div>
                    @else
                        <div class="col-md-12 col-sm-12">
                            <img src="{{ @asset('images/got-image.jpg') }}">
                        </div>
                    @endif
                    <div class="col-md-12 col-sm-12" style="margin-top: 2rem;">
                        <h1> {{ $prediction->title }} </h1>
                        <ul>
                            <li>
                                <p>
                                    {!! $prediction->description !!}
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                    <hr style="border-top: 1px solid #fac832;">
                </div>
            @endforeach
        </div>
    </div>
@stop

@section('extra-js')
    <script>
        $(function() {
            $('.detect').removeClass('active');
            $('#predictions').addClass('active');
        });
    </script>
@stop