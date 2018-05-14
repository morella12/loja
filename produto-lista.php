<?php 
include("cabecalho.php");
include('conecta.php');
include('bancoArquivo.php');			
?>

	<h1 class="ui center aligned header">Lista de Produtos</h1>
	<table class="ui celled table lt-produtos">
		<thead>
			<tr>
				<th>Código</th>
				<th>Produto</th>
				<th>Preço</th>
				<th>Descrição</th>
				<th class="center aligned">Ações</th>
			</tr>
		</thead>
		<tbody>
<?php
$produtos = listar($dao,'produto');
foreach($produtos as $produto)
{
	if ($produto['nome'] != null || $produto['nome'] != "")
	{
	?>
			<tr>
				<td>
					<?=$produto['id']?>
				</td>
				<td>
					<?=$produto['nome']?>
				</td>
				<td>
					<?=$produto['preco']?>
				</td>
				<td>
					<?=substr($produto['descricao'], 0, 15)?>
				</td>
				<td class="ui buttons">
					<form action="remove-produto.php" method="post" >
						<input type="hidden" name="id" value="<?=$produto['id']?>">
						<button  class="ui button remover"><i class="trash icon"></i> Remover </button>
					</form>
				</td>
			</tr>
		<?php
		}

}
?>
		</tbody>
	</table>
<?php
$dao -> close();

include("rodape.php");
