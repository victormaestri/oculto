<?php 
	//Chamando a conexão
	include 'lib/conexao.php';

	//Gravando no banco de dados !
	$query = "INSERT INTO `usuarios`
	VALUES ('','$nome', '$email', '$login', '$senha')";

	mysql_query($query,$conexao);

	echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
?> 