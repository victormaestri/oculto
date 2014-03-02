<link rel="stylesheet" type="text/css" href="css/padrao.css" />

<?php

include 'lib/conexao.php';

$usuario = $_POST['usuario'];
$senha = $_POST['password'];

$verifica = "
	SELECT login, senha
	FROM usuarios
	WHERE login = '".$usuario."'
	AND senha = '".$senha."'
";

$verifica = mysql_query($verifica,$conexao) or die(mysql_error());

$resultado = mysql_num_rows($verifica);

if ($resultado == 0) {
	echo 'Usuário e/ou senha incorretos. Por favor tente novamente. <a href="login.php">Voltar</a>';
} else {
	echo header("Location: home.php");
}

?>