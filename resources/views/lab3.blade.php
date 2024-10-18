@extends('Components.Layout')

@section('title', 'Layouts')

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
		<div class="header header_home1">LAYOUTS</div>
		<p class="desc">The description focuses on creating a modular layout,<br> organizing components, defining routes, and ensuring maintainability in <br> Laravel projects.</p>
		<p class="summary">SUMMARY:  <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Through this task, I learned how to create a modular layout in Laravel using Blade templates, which allowed for consistent structure across multiple views. I also gained experience in organizing components within the `resources/views` directory and defining routes to connect them, enhancing my understanding of Laravel's MVC architecture and improving my skills in managing view templates. This experience underscored the importance of maintainability in web development. Additionally, it equipped me with practical skills that will be beneficial for future projects involving Laravel.</p>
		</div>
	  </div> 
  </div>
@endsection
