<div class="col-md-12 col-lg-4 sidebar">
    <div class="sidebar-box">
        <div class="bio text-center">
            <div class="bio-body">
                <h2>Social networks</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus
                    excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.</p>
                <p class="social">
                    <a href="https://www.facebook.com" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="https://twitter.com" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="https://www.instagram.com" class="p-2"><span class="fa fa-instagram"></span></a>
                    <a href="https://www.youtube.com" class="p-2"><span class="fa fa-youtube-play"></span></a>
                <p><a href="{{route('home')}}" class="btn btn-primary btn-sm rounded">Subscribe</a></p>
                </p>
            </div>
        </div>
    </div>
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

                <div class="sidebar-box">
                    <h3 class="heading">Categories</h3>
                    <ul class="categories">
                        @foreach($categories as $category)
                            <li><a href="{{route('article.category', $category->slug)}}"
                                   class="category-link">{{$category->title}}<span>{{$category->articles_count}}</span></a>
                            </li>
                        @endforeach
                    </ul>
                </div>
        </div>


