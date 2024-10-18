@extends('Components.Layout')

@section('title', 'Routes')

@section('styles')
	<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Bebas+Neue&amp;family=Figtree:wght@300;600&amp;display=swap'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Pacifico&amp;family=Quicksand&amp;display=swap'>
	<link rel="stylesheet" href="{{ url('styles/styles.css') }}">
	@endsection

@section('content')

<div id="home" class="first_page">
	<div class="wrapper">
		<div class="header header_home">ROUTES</div>
		<p class="desc">This lab focuses on understanding <br> basic Laravel routing and Blade templating</p>
		<p class="summary">SUMMARY:  <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In this session, we explored the process of creating routes in Laravel and how to link them to specific views using Blade templates. We covered how to define routes in the `web.php` file, enabling users to access different pages of a web application by specifying appropriate URLs. Additionally, we learned how to return views using Laravel’s Blade templating engine, which allows for dynamic content rendering and efficient layout management. This knowledge provides a foundation for building more complex web applications, with clear navigation and organized front-end presentation through Blade templates.</p>
		</div>
	  </div> 
  </div>
@endsection
