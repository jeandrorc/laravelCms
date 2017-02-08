<h1>Chegou uma solicitação de contato!</h1>
<h2>{{$nome}} entrou em contato através do formulário de contato.</h2>
<p><strong>Nome:</strong> {{ $nome }}</p>

@if (isset($email) && $email)
	<p><strong>Email:</strong> {{ $email }}</p>	
@endif
@if (isset($telefone) && $telefone)
	<p><strong>Telefone:</strong> {{ $telefone }}</p>	
@endif
<p><strong>Mensagem:</strong> {{ $mensagem }}</p>


