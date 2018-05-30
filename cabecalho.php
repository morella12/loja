<!DOCTYPE html>
<html>
<head>
	<title>EGCE Mega Hair</title>
	<meta charset="utf-8" />
	<!-- Meus arquivos criados -->
	<link rel="stylesheet" type="text/css" href="style.css">
	

	<!-- Semantic -->
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.css">
	<script
	  src="https://code.jquery.com/jquery-3.1.1.min.js"
	  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
	  crossorigin="anonymous"></script>
	<script src="semantic/dist/semantic.min.js"></script>

</head>
<body>
<div class="ui container">
	<div class="ui left fixed vertical menu">
		<div class="item logo">
			<a href="index.php">
				<img class="logo" src="imagens/egce.png"/>
			</a>
		</div>
		<?php 
			if(isset($_COOKIE['usuario_logado']))
			{?>
				<p class="item" id="msg-user">Olá <?=$_COOKIE["usuario_logado"]?></p>
			<?php
			}
		?>
		<div class="right menu">
			<div class="item">
		    	<div class="ui transparent icon input">
		    		<input type="text" placeholder="Search users...">
		        	<i class="search link icon"></i>
		    	</div>
		    </div>
		</div>
		<a class="item" href="cadastrar-produto.php">Cadastro de Produto</a>
		<a class="item" href="produto-lista.php">Lista de Produto</a>
		
	</div>
  	<div class="ui container">	