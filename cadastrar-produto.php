<?php
include("cabecalho.php"); 
include("conecta.php");
include("bancoArquivo.php");

$categorias = listar($dao,'categorias');

?>
<div class="conteudo">
		<div class="colunas">
			<h1>Ficha Cadastro do Produtos</h1>
			<form class="ui form" method="post" action="adiciona-produto.php">
<?php
if(!isset($_POST['id']))
{
	?>
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
	</div>
	<?php
	}

	else
	{
		$id = $_POST['id'];
		$whereItem = editarProduto($dao,$id);
		foreach ($whereItem as $coluna)
		{
			?>
					<input type="hidden" name="id" value="<?=$coluna['id']?>">
					<input type="text" name="nome" value="<?=$coluna['nome']?>">
					<?php
					if($coluna['usado'] == 1)
					{
					?>
						<input type="checkbox" name="usado" checked=""> Usado
					<?php
					}

					else
					{
					?>
						<input type="checkbox" name="usado"> Usado
					<select name="cat">
						<option value="" hidden="">Categorias</option>
						<?php
							foreach ($categorias as $categoria)
							{
								if($coluna['categoria'] == $categoria['id'])
								{
						?>
								<option  value="<?=$categoria['id']?>" selected> <?=$categoria['nome']?> </option>
							<?php
								}
								else
								{
								?>
									<option  value="<?=$categoria['id']?>"> <?=$categoria['nome']?> </option>
								<?php
								}
							}
					}?>
					</select>
					<input type="number" name="preco" value="<?=$coluna['preco']?>">
					<textarea name="descricao"><?=$coluna['descricao']?></textarea>
					<button class="ui black button" type="submit">Salva</button>
				</form>
			</div>
		</div>
			<?php
		}
	}
include("rodape.php") ?>