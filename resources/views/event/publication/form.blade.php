<div class="form-group">
  {!! Form::label('title', 'Título', ['class' => 'control-label col-sm-2 col-md-offset-2']) !!}
  <div class="col-sm-5 input-group">
    <div class="input-group-addon"><i class="fa fa-book"></i></div>
    {!! Form::text('title', null, ['class' => 'form-control']); !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('document', 'Arquivo', ['class' => 'control-label col-sm-2 col-md-offset-2']) !!}
  <div class="col-sm-5 input-group">
    <div class="input-group-addon"><i class="fa fa-upload"></i></div>
    {!! Form::file('document', ['class' => 'form-control']); !!}
  </div>
</div>

<div class="text-center">
	{!! Form::submit('Gravar', ['class' => 'btn btn-success'])!!}
</div>