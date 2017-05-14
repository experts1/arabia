@extends ('main')

@section('title','|Edit contact')

<script type="text/javascript" src="js/jquery-1.8.0.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

@section('content')

<script src="js/jquery-1.11.1.min.js"></script> 
     <link href="/css/bootstrap.css" rel="stylesheet" media="all">
     <link href="/css/style.css"  rel="stylesheet" media="all">
     <link rel="stylesheet" href="/css/swipebox.css">

<div class="row">
	<div class="col-md-8">
		{!! Form::model($contact ,['route' =>['contact.update', $contact->id],'method'=>'PUT']) !!}
              		{{Form::label('callus','Call-Us:')}}
                  {{Form::int('callus', null, array('class'=> 'form-control'))}}

                  {{Form::label('email','E-Mail:')}}
                  {{Form::text('email', null, array('class'=> 'form-control'))}}

                  {{Form::label('address','Address:')}}
                  {{Form::text('address', null, array('class'=> 'form-control'))}}


       </div>
    </div>

    <div class="col-md-4">
    	<div class="well">
    		<dl class="dl-horizontal">
    			<dt>Created at:</dt>
    			<dd>{{date('M j, Y h:ia',strtotime($contact->created_at)) }}</dd>
            </dl>

    
    		<dl class="dl-horizontal">
    			<dt>Last Updated</dt>
    			<dd>{{date('M j, Y h:ia',strtotime($contact->updated_at)) }}</dd>
            </dl>
           <hr>
       <div class="row">    
           <div class="col-md-6">
           	{!! Html::LinkRoute('contact.show','Cancle',array($contact->id), array('class' => 'btn btn-primary btn-block'))  !!}
           </div>  	
       <div class="col-md-6">
       	{{Form::submit('Save Changes', ['class' => 'btn btn-primary btn-block'])}}
       </div>
     </div>
  </div>     
   {{!! Form::close() !!}}
@endsection