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
				<th>Categoria</th>
				<th>Condição</th>
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
					<?=$produto['catnome']?>
				</td>
				<td>
					<?php
					if($produto['usado'] == '0')
						print_r('Novo');
					else
						print_r("Usado");
					?>
				<td>
					<?=substr($produto['descricao'], 0, 15)?>
				</td>
				
				<td class="ui buttons">
					<form action="cadastro.php" method="post" >
						<input type="hidden" name="id" value="<?=$produto['id']?>">
						<button class="ui button editar" name="botao" value="editar"><i class="edit icon"></i> Editar </button> 
					</form>
					<form action="removerProduto.php" method="post">
						<input type="hidden" name="id" value="<?=$produto['id']?>">
						<button class="ui button editar" name="botao" value="editar"><i class="trash icon"></i> Remover </button> 
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
