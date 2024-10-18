@extends('components.layout') 
@section('title', 'Portfolio') 

@section('styles')
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Bebas+Neue&amp;family=Figtree:wght@300;600&amp;display=swap'>
    
    <link rel="stylesheet" href="{{ asset('styles/styles_a.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
@endsection

@section('content') 

    <div class="text-center mb-5">
        <h2 class="header header_home">LABORATORY COMPILATION</h2>
    </div>

    <div class="container">
        <div class="row g-4"> <!-- g-4 for spacing between columns -->
            <div class="col-md-6 col-lg-3 d-flex"> <!-- d-flex for equal height -->
                <article class="w-100"> <!-- w-100 for width control -->
                    <figure class="text-center">
                        <img src="assets/img/about/coverr.svg" class="setup_img img-fluid" alt="Setup Image">
                    </figure>
                    <div class="article-body text-center">
                        <h2><a href="/lab1" target="_blank">VIEWS</a></h2>
                        <p class="info">Installation of Laravel along with its dependencies</p>
                    </div>
                </article>
            </div>

            <div class="col-md-6 col-lg-3 d-flex"> 
                <article class="w-100">
                    <figure class="text-center">
                        <img src="assets/img/about/route.svg" class="img-fluid" alt="Routes Image">
                    </figure>
                    <div class="article-body text-center">
                        <h2><a href="lab2" target="_blank">ROUTES</a></h2>
                        <p class="info">Route creation for different blade views and laravel templating</p>
                    </div>
                </article>
            </div>

            <div class="col-md-6 col-lg-3 d-flex"> 
                <article class="w-100">
                    <figure class="text-center">
                        <img src="assets/img/about/layout.svg" class="img-fluid" alt="Layout Image">
                    </figure>
                    <div class="article-body text-center">
                        <h2><a href="lab3" target="_blank">LAYOUT</a></h2>
                        <p class="info">Creating a layout file along with its components</p>
                    </div>
                </article>
            </div>

            <div class="col-md-6 col-lg-3 d-flex"> 
                <article class="w-100">
                    <figure class="text-center">
                        <img src="assets/img/about/coverrr.svg" class="img-fluid" alt="Middleware Image">
                    </figure>
                    <div class="article-body text-center">
                        <h2><a href="lab4" target="_blank">MIDDLEWARE</a></h2>
                        <p class="info">Creating and registering middleware globally</p>
                    </div>
                </article>
            </div>
        </div>
    </div>

@endsection
