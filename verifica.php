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
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

<link rel="stylesheet" type="text/css" href="css/padrao.css" />
</head>
<body>
<?php
if ($resultado == 0) {
	echo 'Usuário e/ou senha incorretos. Por favor tente novamente. <a href="index.php">Voltar</a>';
} else {
	echo header("Location: home.php");
}

?>
</body>
</html>