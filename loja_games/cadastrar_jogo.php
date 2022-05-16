<?php
    //Importando a página de connect
    require("connect.php");

    //Obtendo os valores do formulário
    $nome_jogo = $_POST["c_nome"];
    $id_categoria = $_POST["categoria_livro"];

    //******** Verificando se já existe um  jogo cadastrado com o mesmo nome ******

    //Gerando a SQL de PESQUISA do nome do jogo
    $pesquisar_nome = "SELECT * FROM `jogos` WHERE nome_jogo = '$nome_jogo'";

    //Executando a SQL de pesquisa do nome do jogo
    $resultado_nome = mysqli_query($conexao, $pesquisar_nome);

    //Retornando o numero de linhas(objetos) encontrados
    $numero_retorno = mysqli_num_rows($resultado_nome);

    //Verificando se existe algum retorno
    if($numero_retorno == 0)
    {
        //Gerando a SQL de inserção(Cadastrar) do jogo
        $sql_cadastrar = "INSERT INTO `jogos`(`nome_jogo`,`id_categoria`) VALUES ('$nome_jogo',$id_categoria)";
        //Executando a SQL
        mysqli_query($conexao, $sql_cadastrar);
        //Imprimindo na tela
        ?>
            <script>
                alert("Jogo cadastrado!");
                window.location.replace("form_cadastrar_jogo.php");
            </script>
        <?php
    }else{
        ?>
            <script>
                alert("Jogo já cadastrado");
                javascript:history.back();
            </script>
        <?php
    }
    
?>