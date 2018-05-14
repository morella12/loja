<?php
include('conecta.php');
include('bancoArquivo.php');			

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];

if(insereProduto($dao,$nome,$preco,$descricao))
{
	?>
		<script>
			alert('O produto <?=$nome?> com o preço de R$ <?=$preco?> foi salvo com sucesso!');
		</script>
	<?php
	header("Refresh:0; url=produto-lista.php");
	
}
else
{
	?>
	<script>
		alert('Não foi possivel efetuar o cadastro! ');
	</script>
	<?php
	die();
	header("Refresh:0; url=cadastrar-produto.php");
	$dao->close();
	
}	