<header role="banner">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-9 social">
                    <a href="https://twitter.com"><span class="fa fa-twitter"></span></a>
                    <a href="https://www.facebook.com"><span class="fa fa-facebook"></span></a>
                    <a href="https://www.instagram.com"><span class="fa fa-instagram"></span></a>
                    <a href="https://www.youtube.com"><span class="fa fa-youtube-play"></span></a>
                </div>
                <div class="col-3 search-top">
                    <!-- <a href="#"><span class="fa fa-search"></span></a> -->
                    <form action="{{route('article.search')}}" class="search-top-form" method="GET">
                        <span class="icon fa fa-search"></span>
                        <input type="text" name="query" placeholder="Search...">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container logo-wrap">
        <div class="row pt-5">
            <div class="col-12 text-center">
                <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
                <h1 class="site-logo"><a href="{{route('home')}}">Travel Blog</a></h1>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-md  navbar-light bg-light">
        <div class="container">


            @include('blocks.menu')

        </div>
    </nav>
</header>
