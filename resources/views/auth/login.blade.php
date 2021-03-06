<!DOCTYPE HTML>

@extends('main')
@section('title','|login')
@section('content')


<div class="row">
	<div class="col-md-6 col-md-offset-3">

		{!! Form::open()  !!}

			{{ Form::label('email','Email:')}}
			{{ Form::email('email',null,['class'=>'form-control'])}}
      
			{{ Form::label('password','Password:')}}
			{{ Form::password('password',['class'=>'form-control'])}}

			<hr>	
		    {{ Form::checkbox('remember')}}{{ Form::label('remember',"Remember Me")}}
		    
		    {{ Form::submit('Login',['class'=>'btn btn-primary btn-block'])}}	

		    <a href="{{url('password/reset')}}">Forgot Password</a>

		{!! Form::close() !!}




	</div>	
</div>
<hr>
<hr>


@endsection