@extends('Components.Layout')

@section('title', 'Views')

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
		<div class="header header_home"><a href="https://github.com/hempers/Midterm-Project" target="_blank">VIEWS</a></div>
		<p class="desc">The tasks included installing Laravel, creating a Git project, <br>configuring the `.env` file, and developing multiple views and routes.</p>
		<p class="summary">SUMMARY:  <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Through this task, I learned several important skills in Laravel development. First, I installed Laravel along with its dependencies, ensuring that my development environment was properly set up. I created a Laravel project and placed it in a Git repository, which helped me understand how to use version control to manage my code efficiently. I configured the `.env` file to connect the project to a database, gaining insight into handling environment-specific settings. By creating multiple views (homepage, about, and content) and defining routes, I got hands-on experience with Laravel’s MVC architecture. I also identified and documented the purpose of key directories and files in the project, which deepened my understanding of Laravel’s structure.</p>
		</div>
	  </div> 
  </div>
@endsection
