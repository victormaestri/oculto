<?php 
	//Chamando a conexao
	include 'lib/conexao.php';

	// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
	$nome	= $_POST ["nome"];
	$email	= $_POST ["email"];
	$login	= $_POST ["login"];
	$senha	= $_POST ["senha"];

	//Gravando no banco de dados !
	$query = "INSERT INTO usuarios
	VALUES ('','$nome', '$email', '$login', '$senha')";

	mysql_query($query,$conexao);

	echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
?> 