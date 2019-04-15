@extends('adminlte::page')

@section('title', 'IEGM@ADMIN - Eventos')

@section('content_header')
    <h1>Eventos</h1>
@stop

@section('content_title')
    <h3 class="box-title">{{$event->title}}</h3>
    <a href="{{ route('event.list') }}" class="btn btn-xs btn-default pull-right"><i class="fa fa-arrow-circle-left"></i> VOLTAR</a>
@stop

@section('content')
  
  <div class="text-center">

    <a href="{{ route('program.create', $event->slug) }}" class="btn btn-primary"><i class="fa fa-microphone"></i> NOVA PALESTRA</a>
    <a href="{{ route('publication.create', $event->slug) }}" class="btn btn-primary"><i class="fa fa-file-text-o"></i> NOVA PUBLICAÇÃO</a>
    <a href="{{ route('event.edit', $event->slug) }}" class="btn btn-info"><i class="fa fa-pencil"></i> EDITAR EVENTO</a>
    @if($event->status)
      <a href="{{ route('event.status', $event->id) }}" onclick="return confirm('Tem certeza que deseja desativar o evento?')" class="btn btn-danger"><i class="fa fa-close"></i> DESATIVAR EVENTO</a>
    @else
      <a href="{{ route('event.status', $event->id) }}" onclick="return confirm('Tem certeza que deseja ativar o evento?')" class="btn btn-success"><i class="fa fa-check"></i> ATIVAR EVENTO</a>
    @endif

  </div>

  <hr>
    <p class="text-center">PALESTRAS</p>
  <hr>

  <table class="table table-bordered">
  	<thead>
  		<tr>
  			<th>Palestra</th>
  			<th>Palestrante</th>
  			<th>Sobre</th>
        <th>Data</th>
  			<th>Gerenciar</th>
  		</tr>
  	</thead>
  	<tbody>
  		@forelse($event->programs as $program)
        <tr>
          <td>{{ $program->title }}</td>
          <td>{{ $program->speaker }}</td>
          <td>{{ $program->about }}</td>
          <td>{{ date('d/m/Y', strtotime($program->date)) }} - {{ $program->hour }}h</td>
          <td>
            <a href="{{ route('program.destroy', $program->id) }}" class="btn btn-xs btn-danger" onclick="return confirm('Tem certeza que deseja excluir a palestra?')"><i class="fa fa-trash"></i> Excluir</a>
            <a href="{{ route('program.edit', $program->id) }}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i> Editar</a>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="100" class="text-center">
            <i>Você ainda não cadastrou nenhuma palestra.</i>
          </td>
        </tr>
      @endforelse
  	</tbody>
  </table>

  <hr>
    <p class="text-center">PUBLICAÇÕES</p>
  <hr>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Título</th>
        <th>Arquivo</th>
        <th>Gerenciar</th>
      </tr>
    </thead>
    <tbody>
      @forelse($event->publications as $publication)
        <tr>
          <td>{{ $publication->title }}</td>
          <td style="width:1%; white-space: nowrap;">
            <a href="{{ asset('publications/'.$publication->document) }}" class="btn btn-xs btn-primary" target="_blank">
              <i class="fa fa-eye"></i> Visualizar
            </a>
          </td>
          <td style="width:1%; white-space: nowrap;">
            <a href="{{ route('publication.destroy', $publication->id) }}" class="btn btn-xs btn-danger" onclick="return confirm('Tem certeza que deseja excluir a publicação?')"><i class="fa fa-trash"></i> Excluir</a>
            <a href="{{ route('publication.edit', $publication->id) }}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i> Editar</a>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="100" class="text-center">
            <i>Você ainda não cadastrou nenhuma publicação.</i>
          </td>
        </tr>
      @endforelse
    </tbody>
  </table>

@stop