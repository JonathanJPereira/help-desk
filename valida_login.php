<?php 

	// Capturando os dados do formulário com requisição POST
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	// Array de usuarios -- Exemplo de como vem o dado do banco de dados
	$usuarios = array(
		array(
		"email" => "jonathanjosepereira58@gmail.com",
		"senha" => "123456"
		),
		array(
		"email" => "teste@gmail.com",
		"senha" => "123456"
		)
	);

	// Procurando o email e senha e fazendo a validação
	foreach ($usuarios as $usuario) {
		if ($usuario['email'] === $email AND $usuario['senha'] === $senha) {
		 	$aprovado = true;
		 	break;
		 } else {
		 	$aprovado = false;
		 }

	}

	// Exibindo a mensagem
	if ($aprovado) {
		header('Location: home.php');
	} else {
		header('Location: index.php?login=erro');
	}

?>