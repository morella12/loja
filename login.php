<?php
include("cabecalho.php");
include("bancoArquivo.php");



$usuario = verificarUsuario($dao,$_POST["email"],$_POST["senha"]);

if(isset($usuario))
{
	echo"<script>
		alert('Seja bem vindo a área adminitrativa!');
	</script>";

	setcookie('usuario_logado', $usuario['email'], time()+60);
	header("Refresh:0; url=index.php");
}
else
{
	echo"<script>
		alert('Usuário não registrado. Por favor entre com um usuário validado ou se registre com o administrador!');
	</script>";
	header("Refresh:0; url=index.php");
}



include("rodape.php");