@extends ('main')

@section('title','|View contact')
@section('content')


<script src="js/jquery-1.11.1.min.js"></script> 
     <link href="/css/bootstrap.css" rel="stylesheet" media="all">
     <link href="/css/style.css"  rel="stylesheet" media="all">
     <link rel="stylesheet" href="/css/swipebox.css">

<div class="row">
  <div class="col-md-8">
    <div class="well">
<h2>{{ $contact->callus }}</h2>
<h2>{{ $contact->email }}</h2>
<h2>{{ $contact->address }}</h2>
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
           <div class="col-md-4">
            {!! Html::LinkRoute('contact.edit','Edit',array($contact->id), array('class' => 'btn btn-primary btn-block'))  !!}
           </div>   
       <div class="col-md-6">
        {!! Form::open(['route'=>['contact.destroy',$contact->id],'method'=>'DELETE']) !!}
        {!!Form::submit('Delete', ['class' => 'btn btn-danger btn-block'])!!}
        {!!Form::close()!!}
       </div> 
     </div>
  </div> 
      

@endsection