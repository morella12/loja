<?php
include("cabecalho.php");
include("bancoArquivo.php");

$usuario = verificarUsuario($dao,$_POST["email"],$_POST["senha"]);

if(isset($usuario))
{?>
	<script type="text/javascript">
		alert('Seja bem vindo a área adminitrativa!');
	</script>
<?php
	setcookie('usuario_logado',$usuario['email']);
	header("Refresh:0; url=index.php");
}
else
{?>
	<script type="text/javascript">
		alert('Usuário não registrado. Por favor entre com um susuário validado ou se registre com o administrador!');
	</script>
<?php
	header("Refresh:0; url=index.php");
}
include("rodape.php");