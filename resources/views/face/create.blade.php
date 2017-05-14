@extends ('main')

@section('title', '|Create')

@section ('content')


<script src="js/jquery-1.11.1.min.js"></script> 
     <link href="/css/bootstrap.css" rel="stylesheet" media="all">
     <link href="/css/style.css"  rel="stylesheet" media="all">
     <link rel="stylesheet" href="/css/swipebox.css">



<div class="container">
           <div class="row">
             <div Class="col-md-8 col-md-offset-2"> 

                {!! Form::open(['route'=> 'face.store']) !!}
                  {{Form::label('title','Title:')}}
                  {{Form::text('title', null, array('class'=> 'form-control'))}}

                  {{Form::label('body','Your Post Here:')}}
                  {{Form::textarea('body', null, array('class'=> 'form-control'))}}

                  {{Form::submit('Create Post',array('class'=>'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px'))}}
                {!! Form::close() !!}


@endsection