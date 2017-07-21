<div class="header-top">
    <div class="container">
        <div class="logo">
            <a href="/"><img src="{{ @asset('images/logo.png') }}"></a><!--Put your logo here-->
        </div>
        <div class="top-menu">
            <span class="menu"> </span>
            <!--Menu-->
            <ul>
                <li><a href="/" class="active" class="scroll">Home</a></li>
                <li><a href="/deadParty">Dead Party</a></li>
                <li><a href="/shop">Shop</a></li>
                <li><a href="/videos">Videos</a></li>
                <li><a href="/predictions">Predictions</a></li>
                <li><a href="/news-articles">News & Articles</a></li>
                <li><a href="/twist">Guess the twist</a></li>
                {{--<li><a href="http://www.google.com">Google</a></li>--}}
            </ul>
            <!--End Menu-->
        </div>
        <!--script-nav-->
        <script>
            $("span.menu").click(function () {
                $(".top-menu ul").slideToggle("slow", function () {
                });
            });
        </script>
        <div class="clearfix"></div>
    </div>
</div>