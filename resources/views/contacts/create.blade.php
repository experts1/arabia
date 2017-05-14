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

                {!! Form::open(['route'=> 'contact.store']) !!}
                  {{Form::label('callus','Call-Us:')}}
                  {{Form::text('callus', null, array('class'=> 'form-control'))}}

                  {{Form::label('email','E-Mail:')}}
                  {{Form::text('email', null, array('class'=> 'form-control'))}}

                  {{Form::label('address','Address:')}}
                  {{Form::text('address', null, array('class'=> 'form-control'))}}


                  {{Form::submit('Update Data',array('class'=>'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px'))}}
                {!! Form::close() !!}


@endsection