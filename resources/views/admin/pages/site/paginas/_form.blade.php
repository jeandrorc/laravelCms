<div class="col-md-9">
	<div class="row">
		<div class="col-md-6">
			<div class="form-group{{ $errors->has('titulo') ? ' has-error' : '' }}">
			    {!! Form::label('titulo', 'Titulo:') !!}
			    {!! Form::text('titulo', null, ['class' => 'form-control', 'required' => 'required']) !!}
			    <small class="text-danger">{{ $errors->first('titulo') }}</small>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group{{ $errors->has('descricao') ? ' has-error' : '' }}">
			    {!! Form::label('descricao', 'Descrição:') !!}
			    {!! Form::textarea('descricao', null, ['class' => 'form-control']) !!}
			    <small class="text-danger">{{ $errors->first('descricao') }}</small>
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group{{ $errors->has('texto') ? ' has-error' : '' }}">
			    {!! Form::label('texto', 'Texto:') !!}
			    {!! Form::textarea('texto', null, ['class' => 'form-control','data-ckeditor']) !!}
			    <small class="text-danger">{{ $errors->first('texto') }}</small>
			</div>
		</div>
	</div>
</div>


<div class="col-md-3">
	<div class="row">
		<div class="col-md-12">
			<div class="form-group{{ $errors->has('ativo') ? ' has-error' : '' }}">
			    {!! Form::label('ativo', 'Ativo:') !!}
			    {!! Form::select('ativo',[false=>'INATIVO',true=>'ATIVO'], null, ['id' => 'ativo', 'class' => 'form-control']) !!}
			    <small class="text-danger">{{ $errors->first('ativo') }}</small>
			</div>
		</div>
	</div>

	Imagens:
	<div class="row">
		<div class="col-md-12">
			<div class="uploads" data-uploader-component>
				<span type="button" class="btn btn-default"><i class="fa fa-search"></i> Selecionar arquivos
					<input type="file" name="midias[]" multiple data-fileupload-multiple>
				</span>
			    <div id="progress" class="progress">
			        <div class="progress-bar progress-bar-primary"></div>
			    </div>
				<div class="files">
					
				</div>
				<div class="hidden" data-file-template>
					<div class="file">
						<div class="sortable">
							<i class="fa fa-arrows"></i>
						</div>
						<div class="preview">
							
						</div>
						<div class="titulo">
							Arquivo.png
						</div>
					</div>
				</div>
			</div>
			
		</div>

	</div>
</div>

