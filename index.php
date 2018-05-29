<?php
include("cabecalho.php"); 
include("conecta.php");
include("bancoArquivo.php");
?>
<div class="conteudo">
	<h1>Bem vindo a sua loja!!</h1>
	<?php
	if(!isset($_COOKIE['usuario_logado']))
	{?>
	<h3>Por favor efetue o login para obter o acesso!</h3>
	<div class="ui cards">
		<div class="card">
			<form action="login.php" method="post">
				<div class="content">
					<i class="user circle icon"></i>
					<div class="header">Login</div>
					<div class="meta">Entre com o seu usúario e senha.</div>
					<div class="description">	
						<table>
							<tr>
								<td class="ui input"><input type="email" name="email" placeholder="E-mail" /></td>
							</tr>
							<tr>
								<td class="ui input"><input type="password" name="senha" placeholder="Senha" /></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="extra content">
					<div class="ui two buttons">
						<button class="ui basic green button" type="submit" >Enviar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<?php 
	}
	else
	{?>
		<h3>Você esta logado como <?=$_COOKIE["usuario_logado"]?></h3>
</div>
<?php
}
include("rodape.php") ?>