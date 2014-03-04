<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Amigo Secreto</title>

<link rel="stylesheet" type="text/css" href="css/padrao.css" />

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
	alert("O Campo email é obrigatório!");
	return false;
	}
else
	if(document.cadastro.endereco.value=="")
	{
	alert("O Campo endereÃ§o é obrigatório!");
	return false;
	}
else
	if(document.cadastro.cidade.value=="")
	{
	alert("O Campo Cidade é obrigatório!");
	return false;
	}
else
	if(document.cadastro.estado.value=="")
	{
	alert("O Campo Estado é obrigatório!");
	return false;
	}
else
	if(document.cadastro.bairro.value=="")
	{
	alert("O Campo Bairro é obrigatório!");
	return false;
	}
else
	if(document.cadastro.pais.value=="")
	{
	alert("O Campo paÃ­s é obrigatório!");
	return false;
	}
else
	if(document.cadastro.login.value=="")
	{
	alert("O Campo Login é obrigatório!");
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

function validaLogin()
{
if(document.login.usuario.value=="")
	{
	alert("Digite um usuário");
	return false;
	}
else	
if(document.login.password.value=="")
	{
	alert("Digite uma senha!");
	return false;
	}
else
return true;
}
</script>
</head>
<body>
	<div id="conteudo">
		<h1>BEM VINDO AO AMIGO SECRETO</h1>
		<div class="acesso">
			<form id="login" name="login" method="post" action="verifica.php" onsubmit="return validaLogin(); return false;">
				<table cellspacing="0" cellpadding="0">
					<tr>
						<td>
							<label>Usuário:</label><br/>
							<input style="width:423px;" type="text" name="usuario" id="usuario" value="" />
							<br/><br/>
						</td>
					</tr>
					<tr>
						<td>
							<label>Senha:</label><br/>
							<input style="width:423px;" type="password" name="password" id="password" value="" />
							<br/><br/>
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" value="ENTRAR" />
						</td>
					</tr>
				</table>
			</form>
			<form id="cadastro" name="cadastro" method="post" action="cadastro.php" onsubmit="return validaCampo(); return false;">
				<table cellspacing="0" cellpadding="0">
					<tr>
						<td>
							<label>Nome:</label><br/>
							<input name="nome" type="text" id="nome" size="70" />
							<br/><br/>
						</td>
					</tr>
					<tr>
						<td>
							<label>Email:</label><br/>
							<input name="email" type="text" id="email" size="70" />
							<br/><br/>
						</td>
					</tr>
					<tr>
						<td>
							<label>Login:</label><br/>
							<input name="usuario_cas" type="text" id="usuario_cas" />
							<br/><br/>
						</td>
					</tr>
					<tr>
						<td>
							<label>Senha:</label><br/>
							<input name="senha" type="password" id="senha" />
							<br/><br/>
						</td>
					</tr>
					<tr>
						<td>
							<input name="cadastrar" type="submit" id="cadastrar" value="CADASTRAR" /> 
						</td>
					</tr>
				</table>
			</form>
		</div>
</body>
</html>