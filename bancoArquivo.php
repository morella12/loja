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
	return $dao -> query("insert into produto (nome, preco, descricao, categoria, usado) values ('{$nome}', '{$preco}','{$descricao}','{$categoria}','{$usado}')");
}

function removerProduto($dao,$id)
{
    return $dao -> query("delete from produto where id = {$id}");
}

function alteraProduto($dao,$nome,$preco,$descricao,$categoria,$usado,$id)
{
	return $dao -> query("update produto set nome = '{$nome}', preco = '{$preco}', descricao = '{$descricao}', categoria = {$categoria}, usado = '{$usado}' where id = {$id}");
}

function editarProduto($dao,$id)
{
	return $dao -> query("select * from produto where id = '{$id}'");
}