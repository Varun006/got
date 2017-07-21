@extends('public.layout.main')

@section('extra-css')
    <link href="{{@asset('got-css/atul.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{@asset('got-css/pintrest.css')}}" rel="stylesheet" type="text/css"/>
@stop

@section('body')
    <div class="header remove-bg" id="head">
        @include('public.layout.header')
    </div>

    <div class="content"><!--Content Section-->
        <div class="product-section">
            <div class="container">
                <div class="col-lg-3 pro-category">
                    <ul>
                        <li>
                            <input type="radio" name="filters" value="all" data-filter="*" id="all" class="filter-b" checked><label>All Category</label>
                        </li>
                        <li>
                            <input type="radio" name="filters" value="apparels" id="apparels" class="filter-b"
                                   data-filter=".apparels"><label>Apparels</label>
                        </li>
                        <li>
                            <input type="radio" name="filters" data-filter=".drinkwares" value="drinkwares" class="filter-b"><label>Drinkwares</label>
                        </li>
                        <li>
                            <input type="radio" name="filters" data-filter=".keychains" value="keychains" class="filter-b"><label>Keychains</label>
                        </li>
                        <li>
                            <input type="radio" name="filters" data-filter=".games" value="games" class="filter-b"><label>Games</label>
                        </li>
                        <li>
                            <input type="radio" name="filters" data-filter=".mobile-covers" value="mobile-covers" class="filter-b"><label>Mobile Covers</label>
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
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('extra-js')
    <script src="{{@asset('got-js/pintrest.js')}}"></script>
    <script>
        $(document).ready(function(){
            var currentFilter = window.location.pathname.split('/').pop();
            $('input[value = '+currentFilter+']').attr('checked',true);
            $(".filter-b").click(function(){
                var value = $(this).attr('data-filter');
                if(value == "*") {
                    window.location.href = '/shop';
                    return false;
                }
                value = value.replace('.' , '');
                $('.filter-b').removeClass('active');
                    window.location.href = '/product/'+value;
            });
        });
    </script>
@stop