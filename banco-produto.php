<?php

function listaProdutos($conexao){
	$produtos = array();
	$resultado = mysqli_query($conexao, "select p.*, c.nome as nome_categoria from produtos as p join categorias as c on p.categoria_id = c.id");
	while($produto = mysqli_fetch_assoc($resultado)){
		array_push($produtos, $produto);
	}
	return $produtos;
}

function insereProduto($conexao, $produto, $preco, $descricao,$categoria_id,$usado) {
  $query = "insert into produtos (nome, preco, descricao, categoria_id, usado) values ('{$produto}', '{$preco}', '{$descricao}', '{$categoria_id}','{$usado}')";
  $resultadoDaInsercao = mysqli_query($conexao, $query);
  return $resultadoDaInsercao;
}

function removeProduto($conexao, $id){
	$query = "delete from produtos where id = {$id}";
	return mysqli_query($conexao, $query);
}

function listaProduto($conexao, $id){
	
}

function updateProduto($conexao, $id, $produto, $preco, $descricao){
	$query = "update produtos set nome={$produto},preco={$preco},descricao={$descricao} where id = {$id}";
	return mysqli_query($conexao, $query);
}