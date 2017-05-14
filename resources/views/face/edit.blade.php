@extends ('main')

@section('title','|Edit face')

<script type="text/javascript" src="js/jquery-1.8.0.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

@section('content')

<script src="js/jquery-1.11.1.min.js"></script> 
     <link href="/css/bootstrap.css" rel="stylesheet" media="all">
     <link href="/css/style.css"  rel="stylesheet" media="all">
     <link rel="stylesheet" href="/css/swipebox.css">

<div class="row">
	<div class="col-md-8">
		{!! Form::model($face ,['route' =>['face.update', $face->id],'method'=>'PUT']) !!}
		{{form::label ('title', 'Title:')  }}
    {{Form::text('title', null, ["class"=>'form-control'])}}
    {{form::label ('body', "Body:", ['class'=>'form-spacing-top'])  }}    
    {{Form::textarea('body', null,['class'=>'form-control'])}} 

       </div>
    </div>

    <div class="col-md-4">
    	<div class="well">
    		<dl class="dl-horizontal">
    			<dt>Created at:</dt>
    			<dd>{{date('M j, Y h:ia',strtotime($face->created_at)) }}</dd>
            </dl>

    
    		<dl class="dl-horizontal">
    			<dt>Last Updated</dt>
    			<dd>{{date('M j, Y h:ia',strtotime($face->updated_at)) }}</dd>
            </dl>
           <hr>
       <div class="row">    
           <div class="col-md-6">
           	{!! Html::LinkRoute('face.show','Cancle',array($face->id), array('class' => 'btn btn-primary btn-block'))  !!}
           </div>  	
       <div class="col-md-6">
       	{{Form::submit('Save Changes', ['class' => 'btn btn-primary btn-block'])}}
       </div>
     </div>
  </div>     
   {{!! Form::close() !!}}
@endsection