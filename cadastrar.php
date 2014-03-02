<?php
include 'lib/conexao.php';

$usuarios = mysql_query("
	SELECT * 
	FROM usuarios
");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CADASTRO DE CLIENTES COM BANCO DE DADOS E PHP</title>

<link rel="stylesheet" type="text/css" href="css/padrao.css" />

<style type="text/css">

.style1 {
	color: #FF0000;
	font-size: x-small;
}
.style3 {color: #0000FF; font-size: x-small; }

</style>
 
<script type="text/javascript">
function validaCampo()
{
if(document.cadastro.nome.value=="")
	{
	alert("O Campo nome é obrigatório!");
	return false;
	}
else
	if(document.cadastro.email.value=="")
	{
	alert("O Campo email Ã© obrigatÃ³rio!");
	return false;
	}
else
	if(document.cadastro.endereco.value=="")
	{
	alert("O Campo endereÃ§o Ã© obrigatÃ³rio!");
	return false;
	}
else
	if(document.cadastro.cidade.value=="")
	{
	alert("O Campo Cidade Ã© obrigatÃ³rio!");
	return false;
	}
else
	if(document.cadastro.estado.value=="")
	{
	alert("O Campo Estado Ã© obrigatÃ³rio!");
	return false;
	}
else
	if(document.cadastro.bairro.value=="")
	{
	alert("O Campo Bairro Ã© obrigatÃ³rio!");
	return false;
	}
else
	if(document.cadastro.pais.value=="")
	{
	alert("O Campo paÃ­s Ã© obrigatÃ³rio!");
	return false;
	}
else
	if(document.cadastro.login.value=="")
	{
	alert("O Campo Login Ã© obrigatÃ³rio!");
	return false;
	}
else	
if(document.cadastro.senha.value=="")
	{
	alert("Digite uma senha!");
	return false;
	}
else
return true;
}
<!-- Fim do JavaScript que validarÃ¡ os campos obrigatÃ³rios! -->
</script>
</head>
 
<body>
<form id="cadastro" name="cadastro" method="post" action="cadastro.php" onsubmit="return validaCampo(); return false;">
  <table width="625" border="0">
    <tr>
      <td width="69">Nome:</td>
      <td width="546"><input name="nome" type="text" id="nome" size="70" maxlength="60" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>Email:</td>
      <td><input name="email" type="text" id="email" size="70" maxlength="60" />
      <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>Login:</td>
      <td><input name="login" type="text" id="login" maxlength="12" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>Senha:</td>
      <td><input name="senha" type="password" id="senha" maxlength="12" />
          <span class="style1">*</span></td>
    </tr>
      <tr>
      <td colspan="2"><p>
        <input name="cadastrar" type="submit" id="cadastrar" value="Concluir meu Cadastro!" /> 
        <br />
          <input name="limpar" type="reset" id="limpar" value="Limpar Campos preenchidos!" />
          <br />
          <span class="style1">* Campos com * s&atilde;o obrigat&oacute;rios!          </span></p>
      <p>&nbsp; </p></td>
    </tr>
  </table>
</form>
<div>
	Lista de usuarios:<br/>
	<table border="1" style="width:50%;border-collapse:collapse;">
		<tr>
			<th>ID</th>
			<th>NOME</th>
			<th>EMAIL</th>
		<?php while ($usuario = mysql_fetch_assoc($usuarios)) { ?>
		<tr>
			<td><?php echo $usuario['id'];?></td>
			<td><?php echo $usuario['nome'];?></td>
			<td><?php echo $usuario['email'];?></td>
		</tr>
		<?php } ?>
	</table>
</div>
</body>
</html>