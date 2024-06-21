<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Maioridade</title>
	<link rel="stylesheet" type="text/css" href="template.css">
</head>
<body>
	<header><h1>Teste de Maioridade</h1></header>
	<section>
		<form method="post">
			<label>Digite seu nome</label><br>
			<input type="text" name="nome"><br>

			<br><label>Digite sua idade</label><br>
			<input type="text" name="idade"><br>
			
			<br><input type="submit" name="btnValidar" value="Validar">	
		</form>	
		<a href="index.php">Voltar</a>
	</section>
	<main>
		<?php		
			$nome = $_POST['nome'];
			$idade = $_POST['idade'];
			if ($idade >= 18) {
				echo "<h4>Parabéns $nome! Você é maior de idade.";
			}
			else{
				echo "<h4>Que pena $nome! Você não é maior de idade.";
			}
		?>
	</main>
</body>
</html>