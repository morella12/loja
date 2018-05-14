<?php

include('conecta.php');

function listar($conexao,$tabela)
{
	$itens = array();
	$resultado = $tabela == "produto" ? $conexao->query('select p.*,c.nome as catnome from produto as p join categorias as c on c.id = p.categoria') : $conexao->query('select * from '. $tabela);

	while($item = $resultado->fetch_assoc())
		array_push($itens,$item);
	
	return $itens;
}

function insereProduto($dao,$nome,$preco,$descricao,$categoria,$usado)
{
	$query = "insert into produto (nome, preco, descricao, categoria, usado) values ('{$nome}', '{$preco}','{$descricao}','{$categoria}','{$usado}')";
	echo $query;
	return $dao -> query($query);
}

function removerProduto($dao,$id)
{
    return $dao -> query("delete from produto where id = {$id}");
}

function editaProduto($dao,$id)