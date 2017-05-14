@extends ('main')

@section('title','|View face')
@section('content')


<script src="js/jquery-1.11.1.min.js"></script> 
     <link href="/css/bootstrap.css" rel="stylesheet" media="all">
     <link href="/css/style.css"  rel="stylesheet" media="all">
     <link rel="stylesheet" href="/css/swipebox.css">
<hr>
<div class="row">
	<div class="col-md-8">
		<div class="well">
<h1>{{ $face->title }}</h1>
<p Class="lead">{{ $face->body }}</p>
       </div>
    </div>

    <div class="col-md-4">
    	<div class="well">
    		<dl class="dl-horizontal">
    			<dt>Created at:</dt>
    			<dd>{{date('M j, Y h:ia',strtotime($face->created_at)) }}</dd>
            </dl>
       </div>
    
    		<dl class="dl-horizontal">
    			<dt>Last Updated</dt>
    			<dd>{{date('M j, Y h:ia',strtotime($face->updated_at)) }}</dd>
            </dl>
           <hr>
       <div class="row">    
           <div class="col-md-4">
           	{!! Html::LinkRoute('face.edit','Edit',array($face->id), array('class' => 'btn btn-primary btn-block'))  !!}
           </div>  	
       <div class="col-md-6">
        {!! Form::open(['route'=>['face.destroy',$face->id],'method'=>'DELETE']) !!}
       	{!!Form::submit('Delete', ['class' => 'btn btn-danger btn-block'])!!}
        {!!Form::close()!!}
       </div> 
     </div>
  </div> 
      </div>
    </div>
      

@endsection