<?php
	$servidor = "localhost";
	$usuario = "root"; // COLOQUE AQUI O USUARIO DO SEU BANCO DE DADOS EX: root
	$senha = ""; // COLOQUE A SENHA DO BANCO DE DADOS CASO POSSUA SENHA EX: 12345
	$dbname = "mapaFetch"; // NOME DO BANCO DE DADOS CRIADO NESTE EXEMPLO (mapaFetch), CASO MUDE ALTERE AQUI
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
			//echo "Conexao realizada com sucesso";
	}

	?>