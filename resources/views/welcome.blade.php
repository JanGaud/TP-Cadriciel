@extends('layouts.app')
@section('title', 'Acceuil')
@section('content')

    <!-- Page Content-->
    <div class="container px-4 px-lg-0">
        <!-- Heading Row-->
        <div class="row gx-4 gx-lg-5 align-items-center my-5">
            <div class="col-lg-7">
                <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/img/college2.jpg" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/college3.jpg" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/college4.jpg" alt="">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>

                </div>
            </div>
            <div class="col-lg-5 mb-4">
                <h1 class="font-weight-light">@lang('lang.school_name')</h1>
                <p>
                    @lang('lang.plateform_desc1')
                    <br><br>
                    @lang('lang.plateform_desc2')
                </p>
                <a class="btn btn-primary" href="#!">@lang('lang.read_more')</a>
            </div>
        </div>
    </div>
    <!-- Parralax -->
    <div class="parralax-container mt-5">
        <section class="section-background parallax">

        </section>
    </div>
    <!-- Content Row-->
    <div class="container bootstrap snippets bootdeys">
        <div class="row">
            <div class="col-md-4 col-sm-6 content-card">
                <div class="card-big-shadow">
                    <div class="card card-just-text" data-background="color" data-color="blue" data-radius="none">
                        <div class="content">
                            <h6 class="category">04-22-2023</h6>
                            <h4 class="title"><a href="#">@lang('lang.card_blue_title')</a></h4>
                            <p class="description">@lang('lang.card_blue_p')</p>
                        </div>
                    </div> <!-- end card -->
                </div>
            </div>

            <div class="col-md-4 col-sm-6 content-card">
                <div class="card-big-shadow">
                    <div class="card card-just-text" data-background="color" data-color="green" data-radius="none">
                        <div class="content">
                            <h6 class="category">05-14-2023</h6>
                            <h4 class="title"><a href="#">@lang('lang.card_green_title')</a></h4>
                            <p class="description">@lang('lang.card_green_p')</p>
                        </div>
                    </div> <!-- end card -->
                </div>
            </div>

            <div class="col-md-4 col-sm-6 content-card">
                <div class="card-big-shadow">
                    <div class="card card-just-text" data-background="color" data-color="yellow" data-radius="none">
                        <div class="content">
                            <h6 class="category">06-10-2023</h6>
                            <h4 class="title"><a href="#">@lang('lang.card_yellow_title')</a></h4>
                            <p class="description">@lang('lang.card_yellow_p')</p>
                        </div>
                    </div> <!-- end card -->
                </div>
            </div>

            <div class="col-md-4 col-sm-6 content-card">
                <div class="card-big-shadow">
                    <div class="card card-just-text" data-background="color" data-color="brown" data-radius="none">
                        <div class="content">
                            <h6 class="category">03-29-2023</h6>
                            <h4 class="title"><a href="#">@lang('lang.card_brown_title')</a></h4>
                            <p class="description">@lang('lang.card_brown_p')</p>
                        </div>
                    </div> <!-- end card -->
                </div>
            </div>

            <div class="col-md-4 col-sm-6 content-card">
                <div class="card-big-shadow">
                    <div class="card card-just-text" data-background="color" data-color="purple" data-radius="none">
                        <div class="content">
                            <h6 class="category">02-16-2023</h6>
                            <h4 class="title"><a href="#">@lang('lang.card_purple_title')</a></h4>
                            <p class="description">@lang('lang.card_purple_p')</p>
                        </div>
                    </div> <!-- end card -->
                </div>
            </div>

            <div class="col-md-4 col-sm-6 content-card">
                <div class="card-big-shadow">
                    <div class="card card-just-text" data-background="color" data-color="orange" data-radius="none">
                        <div class="content">
                            <h6 class="category">09-01-2023</h6>
                            <h4 class="title"><a href="#">@lang('lang.card_orange_title')</a></h4>
                            <p class="description">@lang('lang.card_orange_p')</p>
                        </div>
                    </div> <!-- end card -->
                </div>
            </div>
        </div>
    </div>

    </html>


@endsection
