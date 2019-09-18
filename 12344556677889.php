home

@extends('layouts.app')

@section('content')
<h1>Home</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius tempore dolor et repellat nostrum sint id aspernatur quasi corporis minus, a ab nihil odio quia, quae assumenda alias velit itaque.</p>
@endsection

@section('sidebar')
	@parent
	<p>This is appended to the sidebar</p>
@endsection



app

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Acme</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	@include('inc.navbar')
	<div class="container">
		@if(Request::is('/'))
			@include('inc.showcase')
		@endif
		<div class="row">
			<div class="col-md-8 col-lg-8">
				@include('inc.messages')
				@yield('content')
			</div>
			<div class="col-md-4 col-lg-4">
				@include('inc.sidebar')
			</div>
		</div>
	</div>

	<footer id='footer' class="text-center">
		<p>Copyright 2019 &copy; ДидлиДадли</p>	
	</footer>

</body>
</html>
