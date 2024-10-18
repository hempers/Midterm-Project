@extends('Components.Layout')

@section('title', 'Middleware')

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
		<div class="header header_home4">MIDDLEWARE</div>
		<p class="desc">This task focuses on creating and registering middleware for age validation and logging HTTP requests in Laravel, with an emphasis on global application and parameter customization.</p>
		<p class="summary">SUMMARY:  <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Through this task, I learned how to create and register new middleware in Laravel, specifically the CheckAge and LogRequests middleware. I understood how to implement logic in the CheckAge middleware to check user age and redirect them accordingly if they don’t meet the criteria. I also gained experience in logging HTTP request details, including the URL, method, and timestamp, to a file. By applying the middleware globally, I simplified the registration process, making it easier to enforce age restrictions across multiple routes. Additionally, I learned how to modify middleware to accept parameters, which enhanced my understanding of middleware functionality in Laravel.</p>
		</div>
	  </div> 
  </div>
@endsection
