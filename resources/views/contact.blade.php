@extends('layouts.app')

@section('content')
<h1>Contact</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam deleniti odit, et consequuntur ab officia qui, iusto id itaque, quisquam, fuga. Esse nihil laudantium adipisci vel quam accusantium veniam, odit!</p>

{!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
    	{{ Form::label('name', 'Name') }}
    	{{ Form::text('name', '', ['class'=>'form-control', 'placeholder'=>'Enter Name']) }}	
    </div>	
    <div class="form-group">
    	{{ Form::label('email', 'E-Mail Address') }}
    	{{ Form::text('email', '', ['class'=>'form-control', 'placeholder'=>'Enter Email']) }}	
    </div>
    <div class="form-group">
    	{{ Form::label('message', 'Message') }}
    	{{ Form::textarea('message', '', ['class'=>'form-control', 'placeholder'=>'Enter message']) }}	
    </div>
    <div>
    	{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    </div>

{!! Form::close() !!}
@endsection