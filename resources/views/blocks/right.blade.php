<div class="col-md-12 col-lg-4 sidebar">
    <div class="sidebar-box search-form-wrap">
        <form action="#" class="search-form">
            <div class="form-group">
                <span class="icon fa fa-search"></span>
                <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
            </div>
        </form>
    </div>
    <!-- END sidebar-box -->
    <div class="sidebar-box">
        <div class="bio text-center">
            <img src="images/person_2.jpg" alt="Image Placeholder" class="img-fluid">
            <div class="bio-body">
                <h2>Craig David</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus
                    excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.</p>
                <p><a href="#" class="btn btn-primary btn-sm rounded">Read my bio</a></p>
                <p class="social">
                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                </p>
            </div>
        </div>
    </div>
    <!-- END sidebar-box -->
    <div class="sidebar-box">
        <h3 class="heading">Popular Posts</h3>
        <div class="post-entry-sidebar">
            <ul>
                @foreach($latestArticles as $article)
                    <li>
                        <a href="{{route('article.show', [$article->category->slug, $article->slug])}}">
                            <img src="/storage/{{$article->preview_image}}" alt="{{$article->title}}" class="mr-4">
                            <div class="text">
                                <h4>{{$article->title}}</h4>
                                <div class="post-meta">
                                    <span class="mr-2">{{$article->formatted_published_at}}</span>
                                </div>
                            </div>
                        </a>
                    </li>
                @endforeach

                <!-- END sidebar-box -->

                <div class="sidebar-box">
                    <h3 class="heading">Categories</h3>
                    <ul class="categories">
                        @foreach($categories as $category)
                            <li><a href="{{route('article.category', $category)}}">{{$category->title}}<span>{{$category->articles_count}}</span></a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- END sidebar-box -->

             </div>
