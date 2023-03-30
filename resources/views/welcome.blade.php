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
                <h1 class="font-weight-light">Collège de Maisonneuve</h1>
                <p>
                    Bienvenue sur la plateforme sociale du collège de Maisonneuve ! Nous sommes ravis de vous présenter un espace en ligne où les étudiants et les enseignants peuvent interagir, échanger des informations et rester informés de l'actualité de notre école.
                    <br><br>
                    En utilisant notre plateforme sociale, les étudiants peuvent trouver des informations sur les cours, les devoirs, les projets, les événements et les activités parascolaires, et interagir avec leurs amis et leurs enseignants en ligne.
                </p>
                <a class="btn btn-primary" href="#!">En savoir plus!</a>
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
                                <h4 class="title"><a href="#">Portes ouvertes</a></h4>
                                <p class="description">What all of these have in common is that they're pulling information out of the app or the service and making it relevant to the moment. </p>
                            </div>
                        </div> <!-- end card -->
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6 content-card">
                    <div class="card-big-shadow">
                        <div class="card card-just-text" data-background="color" data-color="green" data-radius="none">
                            <div class="content">
                                <h6 class="category">05-14-2023</h6>
                                <h4 class="title"><a href="#">Collecte de sang</a></h4>
                                <p class="description">What all of these have in common is that they're pulling information out of the app or the service and making it relevant to the moment. </p>
                            </div>
                        </div> <!-- end card -->
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6 content-card">
                    <div class="card-big-shadow">
                        <div class="card card-just-text" data-background="color" data-color="yellow" data-radius="none">
                            <div class="content">
                                <h6 class="category">06-10-2023</h6>
                                <h4 class="title"><a href="#">Conférence sur les relations</a></h4>
                                <p class="description">What all of these have in common is that they're pulling information out of the app or the service and making it relevant to the moment. </p>
                            </div>
                        </div> <!-- end card -->
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6 content-card">
                    <div class="card-big-shadow">
                        <div class="card card-just-text" data-background="color" data-color="brown" data-radius="none">
                            <div class="content">
                                <h6 class="category">03-29-2023</h6>
                                <h4 class="title"><a href="#">Final collégial de Hockey</a></h4>
                                <p class="description">What all of these have in common is that they're pulling information out of the app or the service and making it relevant to the moment. </p>
                            </div>
                        </div> <!-- end card -->
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6 content-card">
                    <div class="card-big-shadow">
                        <div class="card card-just-text" data-background="color" data-color="purple" data-radius="none">
                            <div class="content">
                                <h6 class="category">02-16-2023</h6>
                                <h4 class="title"><a href="#">Salon d'emploi</a></h4>
                                <p class="description">What all of these have in common is that they're pulling information out of the app or the service and making it relevant to the moment. </p>
                            </div>
                        </div> <!-- end card -->
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6 content-card">
                    <div class="card-big-shadow">
                        <div class="card card-just-text" data-background="color" data-color="orange" data-radius="none">
                            <div class="content">
                                <h6 class="category">09-01-2023</h6>
                                <h4 class="title"><a href="#">Journée de la culture</a></h4>
                                <p class="description">What all of these have in common is that they're pulling information out of the app or the service and making it relevant to the moment. </p>
                            </div>
                        </div> <!-- end card -->
                    </div>
                </div>
            </div>
            </div>
</html>


@endsection