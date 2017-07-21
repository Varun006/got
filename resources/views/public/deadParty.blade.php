@extends('public.layout.main')

@section('extra-css')
    <link href="{{@asset('got-css/atul.css')}}" rel="stylesheet" type="text/css"/>
@stop

@section('body')
    <div class="header remove-bg" id="head">
        @include('public.layout.header')
    </div>

    <div class="content"><!--Content Section-->
        <div class="product-section">
            @foreach($deads as $dead)
                <div class="container character-details">
                    @if($dead->photo != null)
                        <div class="col-md-6 col-sm-6">
                            <img src="{{ $dead->url }}">
                        </div>
                    @else
                        <div class="col-md-6 col-sm-6">
                            <img src="{{ @asset('images/got-image.jpg') }}">
                        </div>
                    @endif
                    <div class="col-md-6 col-sm-6">
                        <h1> {{ $dead->name }} </h1>
                        <ul>
                            <li>
                                <span>Role</span>
                                <p>
                                    {!! $dead->role !!}
                                </p>
                            </li>

                            <li>
                                <span>Time of death</span>
                                <p>
                                    {!! $dead->time !!}
                                </p>
                            </li>

                            <li>
                                <span>Means of execution</span>
                                <p>
                                    {!! $dead->execution !!}
                                </p>
                            </li>

                            <li>
                                <span>Chances of return</span>
                                <p>{!! $dead->return !!}</p>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            @endforeach
        </div>
    </div>
@stop