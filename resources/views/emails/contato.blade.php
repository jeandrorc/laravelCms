<h1>Chegou uma solicitação de contato!</h1>
<h2>{{$data['name'] or 'Guest'}} entrou em contato através do formulário de contato.</h2>
<p><strong>Nome:</strong> {{ $data['name'] or 'Guest' }}</p>

@if (isset($data['email']) && $data['email'])
	<p><strong>Email:</strong> {{ $data['email'] or 'Guest' }}</p>
@endif
@if (isset($data['phone']) && $data['phone'])
	<p><strong>Telefone:</strong> {{ $data['phone'] }}</p>
@endif

@if (isset($data['message']) && $data['message'])
	<p><strong>Mensagem:</strong>  {{ $data['message'] }}</p>
@endif


