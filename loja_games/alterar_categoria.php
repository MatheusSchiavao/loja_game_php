<?php
    $codigo_categoria = $_POST['select_alterar'];
    $novo_texto = $_POST['c_novo_texto'];

    echo "Página de atualização";

    echo "<br>O código é: ".$codigo_categoria;
    echo"<br>O novo nome é: ".$novo_texto;

    //verificar se existe a categoria cadastrada!

    //importando a conexao
    require("connect.php");

    //criando a SQL de pesquisa
    $sql_pesquisa = "SELECT * FROM `descricao_categoria` = '$novo_texto'";

    //executando pesquisa
    $resultado_pesquisa = mysqli_query($conexao, $sql_pesquisa);

    //transformando a pesquisa em numero!
    $numero_resultado = mysqli_num_rows($resultado_pesquisa);

    //imprimindo na tela o valor de categorias encontradas
     echo "O número de categorias com o nome pesquisado é de: ".$numero_resultado;
    //se nao existir... cadastra!
    //se existir... voltamos para o formulário!
    
?>