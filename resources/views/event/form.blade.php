<div class="form-group">
  {!! Form::label('title', 'Evento', ['class' => 'control-label col-sm-1 col-md-offset-2']) !!}
  <div class="col-sm-6 input-group">
    <div class="input-group-addon"><i class="fa fa-bookmark"></i></div>
    {!! Form::text('title', null, ['class' => 'form-control']); !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('description', 'Sobre', ['class' => 'control-label col-sm-1 col-md-offset-2']) !!}
  <div class="col-sm-6 input-group">
    <div class="input-group-addon"><i class="fa fa-newspaper-o"></i></div>
    {!! Form::textarea('description', null, ['class' => 'form-control', 'id' => 'artigo-ckeditor1']); !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('initial_date', 'Início', ['class' => 'control-label col-sm-1 col-md-offset-2']) !!}
  <div class="col-sm-6 input-group">
    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
    {!! Form::date('initial_date', \Carbon\Carbon::now(), ['class' => 'form-control']); !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('end_date', 'Fim', ['class' => 'control-label col-sm-1 col-md-offset-2']) !!}
  <div class="col-sm-6 input-group">
    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
    {!! Form::date('end_date', \Carbon\Carbon::now(), ['class' => 'form-control']); !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('place', 'Localização', ['class' => 'control-label col-sm-1 col-md-offset-2']) !!}
  <div class="col-sm-6 input-group">
    <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
    {!! Form::text('place', null, ['class' => 'form-control']); !!}
  </div>
</div>

<div class="text-center">
	{!! Form::submit('Gravar', ['class' => 'btn btn-success'])!!}
</div>