<?php 

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	// $usuario = array(
	// 	"email" => "jonathanjosepereira58@gmail.com",
	// 	"senha" => "123456"
	// );

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



	foreach ($usuarios as $usuario) {
		if (in_array($email, $usuario) AND in_array($senha, $usuario)) {
		 	$aprovado = true;
		 	break;
		 } else {
		 	$aprovado = false;
		 }

	}

	if ($aprovado) {
		echo "O usuario com o Email: $email foi aprovado";
	} else {
		echo "O usuario com o Email: $email não foi aprovado";
	}

	// if ($usuario['email'] === $email AND $usuario['senha'] === $senha) {
	// 	echo "aprovado";
	// } else {
	// 	echo "Negado";
	// }



?>