<?php
include("cabecalho.php"); 
include("conecta.php");
include("bancoArquivo.php");

$categorias = listar($dao,'categorias');
?>
<div class="colunas">
	<h1>Ficha Cadastro do Produtos</h1>
	<form class="ui form" method="post" action="adiciona-produto.php">
		<input type="text" name="nome" placeholder="Nome do produto">
		<input type="checkbox" name="usado" value="false"> Usado
		<select name="cat">
			<option value="" hidden="">Categorias</option>
			<?php
				foreach ($categorias as $categoria)
				{?>
					<option  value="<?=$categoria['id']?>"> <?=$categoria['nome']?> </option>
				<?php
				}
			?>
		</select>
		<input type="number" name="preco" placeholder="Preço do produto">
		<textarea name="descricao" placeholder="Descrção"></textarea>
		<button class="ui black button" type="submit">Salva</button>
	</form>
</div>

<?php include("rodape.php") ?>