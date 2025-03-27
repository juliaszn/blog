@extends('layouts.main')

@section('content')
    <section class="site-section py-lg">
        <div class="container">

            <div class="row blog-entries element-animate fadeInUp element-animated">

                <div class="col-md-12 col-lg-8 main-content">
                    <img src="/storage/{{$article->detail_image}}" alt="{{$article->title}}" class="img-fluid mb-5">
                    <div class="post-meta">
                        <span class="mr-2">{{$article->formatted_published_at}}</span>
                    </div>
                    <h1 class="mb-4">{{$article->title}}</h1>
                    <a class="category mb-5">{{$article->category->title}}</a>

                    <div class="post-content-body">
                        {!! $article->detail_text !!}
                    </div>


                    <div class="pt-5">
                        <p>Categories:  <a href="#">{{$article->category->title}}</a>
                    </div>
                </div>

                @include('blocks.right')

            </div>
        </div>
    </section>
@endsection

