@extends('Components.Layout')

@section('title', 'About Me')

@section('styles')
	<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Bebas+Neue&amp;family=Figtree:wght@300;600&amp;display=swap'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Pacifico&amp;family=Quicksand&amp;display=swap'>
	<link rel="stylesheet" href="{{ url('styles/style_con.css') }}">
	@endsection

@section('content')

<div id="home" class="first_page">
	<div class="wrapper">
		<div class="header header_home">Hi, I'm Mae Anne</div>
		<div class="content content_home">Hello! I'm Mae Anne B. Bongat, a third-year BS Information Technology student eager to learn more about the IT industry. Although I'm still uncertain about which path to take, I'm committed to completing everything needed to graduate from college.</div>
		<div class="image">
		</div>
	  </div> 
  </div>
@endsection
