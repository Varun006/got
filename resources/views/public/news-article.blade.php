@extends('public.layout.main')

@section('extra-css')
    <link href="{{@asset('got-css/atul.css')}}" rel="stylesheet" type="text/css"/>
@stop

@section('body')
    <div class="header remove-bg" id="head">
        @include('public.layout.header')
    </div>

    <div class="content"><!--Content Section-->
        <div class="news-section"><!--King Of The North Section-->
            <div class="container">
                <h1> <img src="{{ @asset('images/icon7.png') }}"> Game of thrones <span>Articles</span> </h1>
                @foreach($articles as $article)
                <div class="col-md-4 col-sm-6">
                    <div class="news-col">
                        <a href="articles/{{ $article->slug }}">
                            <h2>{{ $article->title }}</h2>
                            @if($article->media_type == 'video')
                                <div class="img-box"><img src="{{@asset('images/got-image.jpg')}}"></div>
                            @else
                                <div class="img-box"><img src="{{$article->url}}"></div>
                            @endif
                            <p>
                                {!! $article->short_description !!}
                            </p>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="more-news">
            <div class="container">
                <h1> <img src="{{ @asset('images/icon7.png') }}"> Latest <span>News</span> </h1>
                <ul>
                    @foreach($news as $single)
                        <li class="col-lg-6 col-sm-6">
                            <a href="news/{{ $single->slug }}">
                                <div>
                                    <h2>{!! $single->title !!}</h2>
                                    <p>{!! $single->short_description !!}</p>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@stop

@section('extra-js')
    <script>

        /**
         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
        /*
         var disqus_config = function () {
         this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
         this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
         };
         */
        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://got-dev.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@stop