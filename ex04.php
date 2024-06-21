<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ex04</title>
	<link rel="stylesheet" type="text/css" href="template.css">
</head>
<body>
	<header><h1>Calculo De Lucro</h1></header>
	<section>
		<form method="post">
			<label>Custo Para Produção</label><br>
			<input type="text" name="Custo"><br>
			<br><label>Preço de Venda</label><br>
			<input type="text" name="Venda"><br>
			<br><label>Quantidade Vendida</label><br>
			<input type="text" name="Qtd"><br>
			<br><input type="submit" name="btnEnviar" value="Concluido">
			<a href="index.php">Voltar</a>
		</form>
	</section>		
	<main>
		<?php
			$custo = $_POST['Custo'];
			$venda = $_POST['Venda'];
			$qtd = $_POST['Qtd'];
			$vTotal = $venda * $qtd;
			$lTotal = ($venda - $custo) * $qtd;
			$vTotal = number_format($vTotal, 2, ",");
			$lTotal = number_format($lTotal, 2, ",");
			echo "<h4>Valor Total: R$$vTotal";
			echo "<h4>Lucro Total: R$$lTotal";
		?>
	</main>	
</body>
</html>