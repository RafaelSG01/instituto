<div class="form-group">
  {!! Form::label('title', 'Palestra', ['class' => 'control-label col-sm-2 col-md-offset-2']) !!}
  <div class="col-sm-5 input-group">
    <div class="input-group-addon"><i class="fa fa-microphone"></i></div>
    {!! Form::text('title', null, ['class' => 'form-control']); !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('speaker', 'Palestrante', ['class' => 'control-label col-sm-2 col-md-offset-2']) !!}
  <div class="col-sm-5 input-group">
    <div class="input-group-addon"><i class="fa fa-user"></i></div>
    {!! Form::text('speaker', null, ['class' => 'form-control']); !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('about', 'Sobre', ['class' => 'control-label col-sm-2 col-md-offset-2']) !!}
  <div class="col-sm-5 input-group">
    <div class="input-group-addon"><i class="fa fa-file-text-o"></i></div>
    {!! Form::textarea('about', null, ['class' => 'form-control']); !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('date', 'Data', ['class' => 'control-label col-sm-2 col-md-offset-2']) !!}
  <div class="col-sm-5 input-group">
    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
    {!! Form::date('date', \Carbon\Carbon::now(), ['class' => 'form-control']); !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('hour', 'Hora', ['class' => 'control-label col-sm-2 col-md-offset-2']) !!}
  <div class="col-sm-5 input-group">
    <div class="input-group-addon"><i class="fa fa-clock-o"></i></div>
    {!! Form::text('hour', null, ['class' => 'form-control']); !!}
  </div>
</div>

<div class="text-center">
	{!! Form::submit('Gravar', ['class' => 'btn btn-success'])!!}
</div>