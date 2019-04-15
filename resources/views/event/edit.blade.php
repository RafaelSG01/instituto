@extends('adminlte::page')

@section('title', 'IEGM@ADMIN - Eventos')

@section('content_header')
    <h1>Eventos</h1>
@stop

@section('content_title')
    <h3 class="box-title">Editar evento</h3>
    <a href="{{ url()->previous() }}" class="btn btn-xs btn-default pull-right"><i class="fa fa-arrow-circle-left"></i> VOLTAR</a>
@stop

@section('content')
  
  <div class="row">
  	<div class="col-md-12 col-md-offset-0 col-xs-10 col-xs-offset-1">
  		
      {!! Form::model($event, ['route' => 'event.update', 'class' => 'form-horizontal']) !!}

        @include('event.form')

        {!! Form::hidden('slug', $event->slug) !!}
      
      {!! Form::close() !!}

  	</div>
  </div>

@stop