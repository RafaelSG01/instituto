@extends('adminlte::page')

@section('title', 'IEGM@ADMIN - Eventos')

@section('content_header')
    <h1>Eventos</h1>
@stop

@section('content_title')
    <h3 class="box-title">Lista</h3>
    <a href="{{ route('event.create') }}" class="btn btn-xs btn-success pull-right"><i class="fa fa-plus"></i> CRIAR</a>
@stop

@section('content')
  
  <div class="row">
  	<div class="col-md-8 col-md-offset-2">
  		<table class="table table-bordered">
  			<thead>
  				<tr>
  					<th>Evento</th>
            <th>Início</th>
            <th>Fim</th>
  					<th>Status</th>
  					<th>Gerenciar</th>
  				</tr>
  			</thead>
  			<tbody>
  				@forelse($events as $event)
  				<tr>
  					<td>{{ $event->title }}</td>
            <td style="width: 1%; white-space: nowrap;">{{ date('d/m/Y', strtotime($event->initial_date)) }}</td>
            <td style="width: 1%; white-space: nowrap;">{{ date('d/m/Y', strtotime($event->end_date)) }}</td>
            <td style="width: 1%; white-space: nowrap;">
              {!! $event->status ? '<span class="label label-success">ATIVO</span>' : '<span class="label label-danger">DESATIVADO</span>'!!}
            </td>
  					<td style="width: 1%; white-space: nowrap;">
              <a href="{{ route('event.destroy', $event->id) }}" class="btn btn-xs btn-danger" onclick="return confirm('Tem certeza que deseja excluir o evento?')"><i class="fa fa-trash"></i> <span class="hidden-xs">Excluir</span></a>
              <a href="{{ route('event.edit', $event->slug) }}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i> <span class="hidden-xs">Editar</span></a>
              <a href="{{ route('event.manager', $event->slug) }}" class="btn btn-xs btn-primary"><i class="fa fa-gear"></i> <span class="hidden-xs">Gerenciar</span></a>
            </td>
  				</tr>
          @empty
          <tr>
            <td colspan="100" class="text-center">
              Não há eventos cadastrados.
            </td>
          </tr>
  				@endforelse
  			</tbody>
  		</table>
  	</div>
  </div>

@stop