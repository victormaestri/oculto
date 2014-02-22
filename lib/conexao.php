<?php 
	//PREENCHA OS DADOS DE CONEXÃO A SEGUIR:
	$hostname = "localhost"; //Nome do servidor
	$username= "root";       //Nome do usuário
	$password= "";           //Senha do usuário
	$banconame = "teste";    //Banco de dados


	// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
	$nome	= $_POST ["nome"];
	$email	= $_POST ["email"];
	$login	= $_POST ["login"];
	$senha	= $_POST ["senha"];


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