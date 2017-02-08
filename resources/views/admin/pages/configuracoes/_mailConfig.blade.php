<div class="divider">
    <div class="col-md-12">
        <h3>Configurações de email:</h3>
    </div>
</div>

<div class="col-md-12">
    <div class="form-group{{ $errors->has('driver') ? ' has-error' : '' }}">
        {!! Form::label('mail.driver', 'DRIVER:') !!}
        {!! Form::text('mail[driver]', $mail['driver'], ['class' => 'form-control']) !!}
        <small class="text-danger">
            {{ $errors->first('mail.driver') }}
        </small>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group{{ $errors->has('encryption') ? ' has-error' : '' }}">
        {!! Form::label('mail.encryption', 'ENCRYPTION:') !!}
        {!! Form::text('mail[encryption]', $mail['encryption'], ['class' => 'form-control']) !!}
        <small class="text-danger">
            {{ $errors->first('mail.encryption') }}
        </small>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group{{ $errors->has('mail.host') ? ' has-error' : '' }}">
        {!! Form::label('mail.host', 'HOST:') !!}
        {!! Form::text('mail[host]', ($mail['host']), ['class' => 'form-control']) !!}
        <small class="text-danger">
            {{ $errors->first('mail.host') }}
        </small>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group{{ $errors->has('mail.port') ? ' has-error' : '' }}">
        {!! Form::label('mail.port', 'PORT:') !!}
        {!! Form::text('mail[port]', ($mail['port']), ['class' => 'form-control']) !!}
        <small class="text-danger">
            {{ $errors->first('mail.port') }}
        </small>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group{{ $errors->has('mail.username') ? ' has-error' : '' }}">
        {!! Form::label('mail.username', 'USERNAME:') !!}
        {!! Form::text('mail[username]', ($mail['username']), ['class' => 'form-control']) !!}
        <small class="text-danger">
            {{ $errors->first('mail.username') }}
        </small>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group{{ $errors->has('mail.password') ? ' has-error' : '' }}">
        {!! Form::label('mail.password', 'PASSWORD:') !!}
        {!! Form::text('mail[password]', ($mail['password']), ['class' => 'form-control']) !!}
        <small class="text-danger">
            {{ $errors->first('mail.password') }}
        </small>
    </div>
</div>
<div class="col-md-12">
    <button type="button" class="btn btn-primary" data-mail="test">Testar</button>
</div>