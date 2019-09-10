@extends('layouts.app')

@section('content')
<h1>Home</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius tempore dolor et repellat nostrum sint id aspernatur quasi corporis minus, a ab nihil odio quia, quae assumenda alias velit itaque.</p>
@endsection

@section('sidebar')
	@parent
	<p>This is appended to the sidebar</p>
@endsection