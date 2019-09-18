@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <?php if(Auth::check()): ?>
						You are logged in, {{ Auth::user()->name }}!
                    <?php endif; ?>	
					
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <h1>Home</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius tempore dolor et repellat nostrum sint id aspernatur quasi corporis minus, a ab nihil odio quia, quae assumenda alias velit itaque.</p> -->
@endsection

@section('sidebar')
	@parent
	<p>This is appended to the sidebar</p>
@endsection
