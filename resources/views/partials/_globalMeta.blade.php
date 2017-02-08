<meta content="noindex, follow" name="robots"/>
<meta name="robots" content="index, follow">
@yield('metas')
<meta content="IE=Edge" http-equiv="X-UA-Compatible"/>
<meta name="token" content="{{ csrf_token() }}">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="{{ $configuracao->descricao or 'Site' }}" name="description"/>

@if(!emptyArray($empresa))
<meta property="business:contact_data:street_address" content="{{ $empresa->logradouro }}"/>
<meta property="business:contact_data:locality" content="{{ $empresa->cidade }}"/>
<meta property="business:contact_data:postal_code" content="{{ $empresa->cep }}"/>
<meta property="business:contact_data:country_name" content="Brasil"/>
<meta property="business:contact_data:email" content="{{ $empresa->email }}"/>
<meta property="business:contact_data:phone_number" content="{{ $empresa->telefone }}"/>
<meta property="business:contact_data:website" content="{{ config('app.url') }}"/>
@endif