<div class="row">
	<div class="col-md-6">
		<div class="form-group{{ $errors->has('titulo') ? ' has-error' : '' }}">
		    {!! Form::label('titulo', 'Titulo') !!}
		    {!! Form::text('titulo', null, ['class' => 'form-control', 'required' => 'required']) !!}
		    <small class="text-danger">{{ $errors->first('titulo') }}</small>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group{{ $errors->has('ativo') ? ' has-error' : '' }}">
		    {!! Form::label('ativo', 'Ativo:') !!}
		    {!! Form::select('ativo',[true=>'Ativo',false=>'Inativo'], null, ['id' => 'ativo', 'class' => 'form-control', 'required' => 'required']) !!}
		    <small class="text-danger">{{ $errors->first('ativo') }}</small>
		</div>
	</div>	
</div>
<div class="row">
	<div class="col-md-12">
		<div class="form-group{{ $errors->has('valor') ? ' has-error' : '' }}">
		    {!! Form::label('valor', 'Script:') !!}
		    {!! Form::textarea('valor', null, ['class' => 'form-control','data-code']) !!}
		    <small class="text-danger">{{ $errors->first('valor') }}</small>
		</div>
	</div>
</div>