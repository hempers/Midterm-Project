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
                        <h2><a href="https://drive.google.com/file/d/1aTJB21D7lzj_4bjPlfNle6iXYXXeXBn3/view?usp=sharing" target="_blank" >SETUP</a></h2>
                        <p class="info">Installation of Laravel along with its dependencies. <br> </p>
                        <p class="info2">By doing that, I learned how to set up Laravel, manage dependencies, and create views and routes. I also documented key directories and my progress in a PDF.</p>
                    </div>
                </article>
            </div>

            <div class="col-md-6 col-lg-3"> 
                <article>
                    <figure>
                        <img src="assets/img/about/route.svg" class="img-fluid" alt="Routes Image">
                    </figure>
                    <div class="article-body">
                        <h2><a href="https://drive.google.com/file/d/1n8pny1Auv0kYWVmluGINRwM2bitUL9Sw/view?usp=drive_link" target="_blank">ROUTES</a></h2>
                        <p class="info">Route creation for the homepage view.</p>
                        <p class="info2">By doing this, I learned to set up basic routes, create views, and manage required and optional parameters while validating usernames to be alphabetic.</p>
                    </div>
                </article>
            </div>

            <div class="col-md-6 col-lg-3"> 
                <article>
                    <figure>
                        <img src="assets/img/about/layout.svg" class="img-fluid" alt="Layout Image">
                    </figure>
                    <div class="article-body">
                        <h2><a href="https://drive.google.com/file/d/1TjpeQnCZybv6RafsFAraYIrRJLYGqoOs/view?usp=drive_link" target="_blank">LAYOUT</a></h2>
                        <p class="info">Creating a layout file along with its components</p>
                        <p class="info2">By doing this, I learned to create a layout file in the "Components" folder, extend it in multiple views, and update routes to return those views.</p>
                    </div>
                </article>
            </div>

            <div class="col-md-6 col-lg-3"> 
                <article>
                    <figure>
                        <img src="assets/img/about/coverrr.svg" class="img-fluid" alt="Middleware Image">
                    </figure>
                    <div class="article-body">
                        <h2><a href="https://drive.google.com/file/d/1kLWNHQvif0M67bkCVNtZedM3buvILjZb/view?usp=drive_link" target="_blank">MIDDLEWARE</a></h2>
                        <p class="info">Creating and registering middleware</p>
                    </div>
                </article>
            </div>
        </div>
    </div>

@endsection
