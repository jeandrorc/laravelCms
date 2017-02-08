<div class="row">
	<div class="col-md-6">
		<div class="form-group{{ $errors->has('titulo') ? ' has-error' : '' }}">
		    {!! Form::label('titulo', 'Titulo:') !!}
		    {!! Form::text('titulo', null, ['class' => 'form-control', 'required' => 'required']) !!}
		    <small class="text-danger">{{ $errors->first('titulo') }}</small>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group{{ $errors->has('descricao') ? ' has-error' : '' }}">
		    {!! Form::label('descricao', 'Descrição:') !!}
		    {!! Form::text('descricao', null, ['class' => 'form-control']) !!}
		    <small class="text-danger">{{ $errors->first('descricao') }}</small>
		</div>
	</div>		
</div>	
<div class="row">
	<div class="col-md-6">
		<div class="form-group{{ $errors->has('ativo') ? ' has-error' : '' }}">
		    {!! Form::label('ativo', 'Ativo:') !!}
		    {!! Form::select('ativo',[true=>'Ativo',false=>'Inativo'], null, ['id' => 'ativo', 'class' => 'form-control']) !!}
		    <small class="text-danger">{{ $errors->first('ativo') }}</small>
		</div>
	</div>
</div>