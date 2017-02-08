<div class="row">

	<div class="col-md-4">
		<div class="form-group{{ $errors->has('titulo') ? ' has-error' : '' }}">
		    {!! Form::label('titulo', 'Titulo') !!}
		    {!! Form::text('titulo', null, ['class' => 'form-control', 'required' => 'required']) !!}
		    <small class="text-danger">{{ $errors->first('titulo') }}</small>
		</div>
	</div>

	<div class="col-md-4">
		<div class="form-group{{ $errors->has('link') ? ' has-error' : '' }}">
		    {!! Form::label('link', 'Link:') !!}
		    {!! Form::text('link', null, ['class' => 'form-control', 'required' => 'required']) !!}
		    <small class="text-danger">{{ $errors->first('link') }}</small>
		</div>
	</div>

	<div class="col-md-4">
		@include('partials._iconSelect',['name'=>'icone','value'=>isset($social->icone) && $social->icone ? $social->icone : null])
	</div>
</div>