<?php

include('conecta.php');

function listar($conexao,$tabela)
{
	$itens = array();
	$resultado = $conexao->query('select * from '. $tabela);

	while($item = $resultado->fetch_assoc())
		array_push($itens,$item);
	
	return $itens;
}

function insereProduto($dao,$nome,$preco,$descricao)
{
	return $dao -> query("insert into produto (nome, preco, descricao) values ('{$nome}', '{$preco}','{$descricao}')");
}

function removerProduto($dao,$id)
{
    return $dao -> query("delete from produto where id = {$id}");
}
