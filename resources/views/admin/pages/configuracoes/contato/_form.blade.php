<div class="row">
	<div class="col-md-6">
	<div class="form-group{{ $errors->has('tipo') ? ' has-error' : '' }}">
	    {!! Form::label('tipo', 'Tipo:') !!}
	    {!! Form::select('tipo',['EMAIL'=>'EMAIL','TELEFONE'=>'TELEFONE','CELULAR'=>'CELULAR'], null, ['id' => 'tipo', 'class' => 'form-control', 'required' => 'required']) !!}
	    <small class="text-danger">{{ $errors->first('tipo') }}</small>
	</div>
	</div>

	<div class="col-md-6">
		<div class="form-group{{ $errors->has('valor') ? ' has-error' : '' }}">
		    {!! Form::label('valor', 'Contato:') !!}
		    {!! Form::text('valor', null, ['class' => 'form-control', 'required' => 'required']) !!}
		    <small class="text-danger">{{ $errors->first('valor') }}</small>
		</div>
	</div>




</div>