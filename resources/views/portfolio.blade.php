@extends('components.layout') 
@section('title', 'Portfolio') 

@section('styles')
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Bebas+Neue&amp;family=Figtree:wght@300;600&amp;display=swap'>
    
    <link rel="stylesheet" href="{{ asset('styles/styles_a.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
   @endsection

@section('content') 

    <div class="text text-center mb-5">
        <h2 class="header header_home">LABORATORY COMPILATION</h2>
    </div>

    <div class="container">
        <div class="row g-4"> <!-- g-4 for spacing between columns -->
            <div class="col-md-6 col-lg-3">
                <article>
                    <figure>
                        <img src="assets/img/about/coverr.svg" class="setup_img" alt="Setup Image">
                    </figure>
                    <div class="article-body">
                        <h2><a href="/lab1" target="_blank" >VIEWS</a></h2>
                        <p class="info">Installation of Laravel along with its dependencies. <br> </p>
                	</div>
                </article>
            </div>

            <div class="col-md-6 col-lg-3"> 
                <article>
                    <figure>
                        <img src="assets/img/about/route.svg" class="img-fluid" alt="Routes Image">
                    </figure>
                    <div class="article-body">
                        <h2><a href="lab2" target="_blank">ROUTES</a></h2>
                        <p class="info">Route creation for different blade views and laravel templating.</p>
                    </div>
                </article>
            </div>

            <div class="col-md-6 col-lg-3"> 
                <article>
                    <figure>
                        <img src="assets/img/about/layout.svg" class="img-fluid" alt="Layout Image">
                    </figure>
                    <div class="article-body">
                        <h2><a href="lab3" target="_blank">LAYOUT</a></h2>
                        <p class="info">Creating a layout file along with its components</p>
                	</div>
                </article>
            </div>

            <div class="col-md-6 col-lg-3"> 
                <article>
                    <figure>
                        <img src="assets/img/about/coverrr.svg" class="img-fluid" alt="Middleware Image">
                    </figure>
                    <div class="article-body">
                        <h2><a href="lab4" target="_blank">MIDDLEWARE</a></h2>
                        <p class="info">Creating and registering middleware globally</p>
                    </div>
                </article>
            </div>
        </div>
    </div>

@endsection
