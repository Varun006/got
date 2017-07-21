@extends('public.layout.main')

@section('extra-css')
    <link href="{{@asset('got-css/atul.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{@asset('got-css/pintrest.css')}}" rel="stylesheet" type="text/css"/>
    {{--<link href="{{@asset('got-css/isotope.css')}}" rel="stylesheet" type="text/css"/>--}}
@stop

@section('body')
    <div class="header remove-bg" id="head">
        @include('public.layout.header')
    </div>

    <div class="content"><!--Content Section-->
        <div class="product-section">
            <!--King Of The North Section-->
            <div class="container">
                {{--<h1><img src="{{ @asset('images/icon7.png') }}"> Game of thrones <span>product</span></h1>--}}
                <div class="col-lg-3 pro-category">
                    <ul>
                        <li>
                            <input type="radio" name="filters" value="all" data-filter="*" id="all" class="filter-b"
                                   checked><label>All Category</label>
                        </li>
                        <li>
                            <input type="radio" name="filters" value="apparels" class="filter-b"
                                   data-filter=".apparels"><label>Apparels</label>
                        </li>
                        <li>
                            <input type="radio" name="filters" data-filter=".drinkwares" class="filter-b"><label>Drinkwares</label>
                        </li>
                        <li>
                            <input type="radio" name="filters" data-filter=".keychains" class="filter-b"><label>Keychains</label>
                        </li>
                        <li>
                            <input type="radio" name="filters" data-filter=".games" class="filter-b"><label>Games</label>
                        </li>
                        <li>
                            <input type="radio" name="filters" data-filter=".mobile-covers" class="filter-b"><label>Mobile Covers</label>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9 portfolioContainerIsotope">
                    <div class="row">
                        <section id="pinBoot">
                            @foreach($products as $product)
                                <article class="white-panel filter {{ $product->category }}">
                                    <img src="{{ $product->photo_url }}">
                                    <h2>{{ $product->name }}</h2>
                                    <p>
                                        {{ $product->description }}
                                    </p>
                                    <a href="{{ $product->link }}">Buy Now</a>
                                </article>
                            @endforeach
                            {{--@foreach($products as $product)--}}
                                {{--<div class="col-md-4 col-sm-6 {{ $product->category }}">--}}
                                    {{--<div class="product-col">--}}
                                        {{--<img src="{{ $product->photo_url }}">--}}
                                        {{--<h2>{{ $product->name }}</h2>--}}
                                        {{--<p>--}}
                                            {{--{{ $product->description }}--}}
                                        {{--</p>--}}
                                        {{--<a href="{{ $product->link }}">Buy Now</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--@endforeach--}}
                        </section>
                    </div>
                    {{--<div class="clearfix"> </div>--}}
                </div>
            </div>
        </div>
    </div>
@stop

@section('extra-js')
    {{--<script src="{{@asset('got-js/isotope.js')}}"></script>--}}
    <script src="{{@asset('got-js/pintrest.js')}}"></script>
    <script>
        $(document).ready(function(){
            $(".filter-b").click(function(){
                var value = $(this).attr('data-filter');
                value = value.replace('.' , '');
                $('.filter-b').removeClass('active');
                {{--window.location({{ route('productFilter' , ['filter' => ]) }});--}}
                window.location.href = '/product/'+value;
//                $(this).addClass('active');
//
//                if(value == "all")
//                {
//                    //$('.filter').removeClass('hidden');
//                    $('.filter').show('1000');
//                }
//                else
//                {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
//                    $(".filter").not('.'+value).hide('3000');
//                    $('.filter').filter('.'+value).show('3000');
//                }
            });
//            I manually commented this code.
//            if ($(".filter-b").removeClass("active")) {
//                $(this).removeClass("active");
//            }
//            $(this).addClass("active");

        });
    </script>
@stop