<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Games</title>
</head>
<body>
    <form method="post" action="cadastrar_jogo.php">
        <h1>Cadastrar jogos</h1>
		Nome: <input name="c_nome" type=text size=50 maxlength=50><br>
		<!--Campo Categoria-->
		Categoria:<br>
		<select name="categoria_livro">
			<option>Selecione..</option>
			<?php
				//Importando a página de connect
				require("connect.php");

				//Gerando a SQL de PESQUISA das categorias existentes no BD
				$pesquisar_categorias = "SELECT * FROM `categoria`";

				//Executando a SQL e armazenando o resultado em uma variavel
				$resultado_categorias = mysqli_query($conexao, $pesquisar_categorias);

				//Obtendo o numero de linhas retornadas na pesquisa
				$numero_resultado = mysqli_num_rows($resultado_categorias);

				//Repeticao para imprimir as categorias no option
				for($i=0; $i < $numero_resultado;$i++)
				{
					//Gerando um vetor com as categorias
					$vetor_categorias = mysqli_fetch_array($resultado_categorias);

					echo "<option value=$vetor_categorias[0]>$vetor_categorias[1]</option>";
				}
			?>
		</select></p>
		<input type=submit value=Enviar>
	</form>
	
</body>
</html>