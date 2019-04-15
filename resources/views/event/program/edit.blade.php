@extends('adminlte::page')

@section('title', 'IEGM@ADMIN - Eventos')

@section('content_header')
    <h1>Eventos</h1>
@stop

@section('content_title')
    <h3 class="box-title">Editar palestra</h3>
    <a href="{{ url()->previous() }}" class="btn btn-xs btn-default pull-right"><i class="fa fa-arrow-circle-left"></i> VOLTAR</a>
@stop

@section('content')
  
  <div class="row">
  	<div class="col-md-12">
  		
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          @include('partials.alert')
        </div>
      </div>

      {!! Form::model($program, ['route' => 'program.update', 'class' => 'form-horizontal']) !!}

        {!! Form::hidden('program_id', $program->id) !!}

        @include('event.program.form')
      
      {!! Form::close() !!}

  	</div>
  </div>

@stop