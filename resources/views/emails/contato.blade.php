<h1>Chegou uma solicitação de contato!</h1>
<h2>{{$name or 'Guest'}} entrou em contato através do formulário de contato.</h2>
<p><strong>Nome:</strong> {{ $name or 'Guest' }}</p>

@if (isset($email) && $email)
	<p><strong>Email:</strong> {{ $email or 'Guest' }}</p>
@endif
@if (isset($phone) && $phone)
	<p><strong>Telefone:</strong> {{ $phone }}</p>
@endif
<p><strong>Mensagem:</strong> {{ $message }}</p>


