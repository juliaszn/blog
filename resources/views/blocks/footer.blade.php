<footer class="site-footer">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4">
                <h3>About Us</h3>
                <p>Discover the World Through My Travel Blog. <a href="{{route('about')}}">Read More</a></p>
            </div>
            <div class="col-md-6 ml-auto">
                <div class="row">
                    <div class="col-md-7">
                        <h3>Latest Post</h3>
                        <div class="post-entry-sidebar">
                            <ul>
                                @foreach($latestArticles as $article)
                                    <li>
                                        <a href="{{route('article.show', [$article->category->slug, $article->slug])}}">
                                            <img src="/storage/{{$article->preview_image}}"
                                                 alt="{{$article->title}}"
                                                 class="mr-4">
                                            <div class="text">
                                                <h4>{{$article->title}}</h4>
                                                <div class="post-meta">
                                                    <span class="mr-2">{{$article->formatted_published_at}}</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-1"></div>

                    <div class="col-md-4">

                        <div class="mb-5">
                            <h3>Quick Links</h3>
                            <ul class="list-unstyled">
                                <li><a href="{{route('about')}}">About Us</a></li>
                                <li><a href="{{route('article.index')}}">Posts</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
