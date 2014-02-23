<?php 
	//Chamando a conex鉶
	include 'lib/conexao.php';

	//Gravando no banco de dados !
	$consulta = "SELECT *
		FROM usuarios";

	mysql_query($consulta,$conexao);
?> 