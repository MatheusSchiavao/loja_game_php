<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir categoria</title>
</head>
<body>
    <h2>Excluir categoria</h2>
    <form action="excluir_categoria.php" method="post">
        <table border="1">
            <tr>
                <td>ID de categoria</td>
                <td>categoria</td>
                <td>Selecionar</td>
            </tr>
            <?php
                //Conexão com o banco
                require("connect.php");

                //Gerando a SQL de PESQUISA das categorias existentes no BD
				$pesquisar_categorias = "SELECT * FROM `categoria`";

                //Executando a SQL e armazenando o resultado em uma variavel
				$resultado_categorias = mysqli_query($conexao, $pesquisar_categorias);

                //Obtendo o numero de linhas retornadas na pesquisa
				$numero_resultado = mysqli_num_rows($resultado_categorias);

                if($numero_resultado == 0)
                {
                    ?>
                        <!-- Aqui tem Javascript!-->
                        <script>
                            alert("Não existe categorias cadastradas");
                            window.location.replace("index.html");
                        </script>
                    <?php
                }
                else
                {
                    //Existe categorias cadastradas!
                    for($i = 0  ; $i < $numero_resultado; $i++)
                    {
                        //Gerando um vetor com as categorias
					    $vetor_categorias = mysqli_fetch_array($resultado_categorias);
                        echo"
                            <tr>
                                <td>$vetor_categorias[0]</td>
                                <td>$vetor_categorias[1]</td>
                                <td><input type='radio' name='check_categoria' value=$vetor_categorias[0]></td>
                            </tr>
                            ";
                    }
                }
            ?>
        </table>
        <br><input type="submit" value="Excluir">
    </form>
    
</body>
</html>