<?php 
	//PREENCHA OS DADOS DE CONEXÃO:
	$hostname = "localhost"; //Nome do servidor
	$username= "root";       //Nome do usuário
	$password= "";           //Senha do usuário
	$banconame = "teste";    //Banco de dados

	//conectando com o localhost - mysql
	$conexao = mysql_connect($hostname, $username, $password);
	if (!$conexao) {
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
	}
	
	//conectando com a tabela do banco de dados
	$banco = mysql_select_db($banconame,$conexao);
	if (!$banco) {
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());
	}
?>