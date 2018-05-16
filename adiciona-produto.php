<?php
include('conecta.php');
include('bancoArquivo.php');			

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$categoria = $_POST['cat'];

if (array_key_exists('usado', $_POST))
	$usado = '1';

else
	$usado = '0';

if(isset($_POST['id']))
{
	$id = $_POST['id'];

	if(alteraProduto($dao,$nome,$preco,$descricao,$categoria,$usado,$id))
	{
		?>
			<script>
				alert('O produto <?=$nome?> foi alterado com sucesso!');
			</script>
		<?php
		header("Refresh:0; url=produto-lista.php");
		
	}
	else
	{
		?>
		<script>
			alert('Não foi possivel alterar o produto! ');
		</script>
		<?php
		header("Refresh:0; url=cadastrar-produto.php");
		$dao->close();
}
else
{
	if(insereProduto($dao,$nome,$preco,$descricao,$categoria,$usado))
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
		header("Refresh:0; url=cadastrar-produto.php");
		$dao->close();
		
	}	
}