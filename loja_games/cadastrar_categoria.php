<?php
    //*********Pesquisando se JÁ EXISTE a descricao cadastrada********
    //Importando a página de connect
    require("connect.php");

    //Obtendo os valores do formulário
    $descricao = $_POST["c_descricao"];

    //Gerando a SQL de PESQUISA
    $pesquisar_descricao = "SELECT * FROM `categoria` WHERE descricao_categoria = '$descricao'";

    //Executando a SQL
    $resultado_descricao = mysqli_query($conexao, $pesquisar_descricao);

    //Retornando o numero de linhas(objetos) encontrados
    $numero_retorno = mysqli_num_rows($resultado_descricao);

    //Verificando se existe algum retorno
    if($numero_retorno == 0)
    {
        //Gerando a SQL de inserção(Cadastrar)
        $sql_cadastrar = "INSERT INTO `categoria`(`descricao_categoria`) VALUES ('$descricao')";
        //Executando a SQL
        mysqli_query($conexao, $sql_cadastrar);
        //Imprimindo na tela
        echo"Categoria cadastrada!";
    }else{
        ?>
            <script>
                alert("Categoria já cadastrada");
                javascript:history.back();
            </script>
        <?php
    }
    
?>