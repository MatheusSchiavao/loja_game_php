<?php
    //Importando o arquivo de conexão com o BD(connect)//
	require("connect.php");

    //Obtendo os valores dos campos//
	$nome_antigo = $_POST['c_descricao_antigo'];
    $nome_novo = $_POST['c_descricao_novo'];

    //Salvando a SQL em uma variavel
	$sql = "UPDATE `item` SET `descricao`='$nome_novo' WHERE `descricao` = '$nome_antigo'";

    //executando a SQL que esta na variavel
    $resultado = mysqli_query($conexao, $sql);

    echo "Livro alterado com sucesso";
?>
<p><a href="form_cadastrar_categoria.html">Voltar</a>
