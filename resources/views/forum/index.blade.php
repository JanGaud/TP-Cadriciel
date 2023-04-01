@extends('layouts.forum')
@section('title', 'étudiant')
@section('content')

    <body>
        <!-- Page header with logo and tagline-->
        <header class="border-bottom mb-4 social-header">
            <div class="banner-txt">
                <h2>
                    Forum
                </h2>
                <p>
                    Chuchotez, parlez, criez, exprimez-vous!
                </p>
            </div>
            <div class="social-banner">
                <img src="/social/assets/SocialBanner.png" alt="">
            </div>
        </header>

        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                        <div class="col-lg-12">

                            <!-- Blog post-->
                            @foreach ($posts as $post)
                                <div class="card mb-4">
                                    <a href="#!"><img class="card-img-top"
                                            src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                                    <div class="card-body">
                                        <div class="small text-muted">{{ $post->created_at->format('F j, Y') }}</div>
                                        <h2 class="card-title h4">{{ $post->title }}</h2>
                                        <p class="card-text">{{ $post->content }}</p>
                                        <a class="btn btn-primary" href="#!">Read more →</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                    <!-- Pagination-->
                    <div class="container">{{ $posts->links() }}</div>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..."
                                    aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Catégories</div>
                        <div class="card-body">
                            <div class="row">
                                @foreach ($categories as $category)
                                    <div class="col-sm-6 mb-3">
                                        <div>
                                            <a href="#">{{ $category->title }}</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Side widget-->
                    <div class="card mb-4">
                        <div class="card-header">Side Widget</div>
                        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to
                            use, and feature the Bootstrap 5 card component!</div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
