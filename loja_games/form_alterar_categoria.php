<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="alterar_categoria.php">
        <h1>Alterar categoria</h1>
        Selecione uma categoria:
        <?php
            //Fazendo a conexão - importando a página connect
            require("connect.php");
            //Pesquisando as categorias cadastradas no banco
            $sql_pesquisa_categoria = "SELECT * FROM `categoria`";
            //Executando a SQL
            $resultado = mysqli_query($conexao,$sql_pesquisa_categoria);
            //Transformando o resultado em numeros
            $numero_resultado = mysqli_num_rows($resultado);
            //Verificando se existe categorias cadastradas
            if($numero_resultado == 0)
                {
                    //Não existe categorias cadastradas
                    ?>
                        <script>
                            alert("Não existe categorias cadastradas!");
                            window.location.replace("index.html");
                        </script>
                    <?php
                }
                else
                {
                    //Se entrou no else, existe categorias cadastradas
                    //Criando o select
                    echo"<select name='select_alterar'>";
                    //Laço de repetição, para imprimir a quantidade de categorais cadastradas
                    for($i=0;$i < $numero_resultado;$i++)
                    {
                        //Transformando o resultado em um vetor
                        $vetor_categoria = mysqli_fetch_array($resultado);
                        //Imprimindo na tela as categorias
                        echo"<option value=$vetor_categoria[0]>$vetor_categoria[1]</option>";
                    }
                    //Fechando o select
                    echo"</select>";
                }
            ?>
        </p>
        Digite a nova descrição:
        <input type=text name="c_novo_texto" size="30">
        </p>
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>