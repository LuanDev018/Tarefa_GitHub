<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ex06</title>
	<link rel="stylesheet" type="text/css" href="template.css">
</head>
<body>
	<header><h1>Calculo do Produto</h1></header>
	<section>
		<form method="post">
			<label>Valor do Produto</label>
			<input type="text" name="Valor">
			<input type="submit" name="btnCalcular" value="Calcular">
			<a href="index.php">Voltar</a>	
		</form>
	</section>	
	<main>
		<?php
			$valor = $_POST['Valor'];
			$vJuros = $valor + ($valor * 0.16);
			$vParcela = $vJuros / 10;
			$vJuros = number_format($vJuros, 2, ",");
			$vParcela = number_format($vParcela, 2, ",");
			echo "<h4>Valor Total: R$$vJuros";
			echo "<br>Pagamento: 10x de R$$vParcela</h4>";
		?>
	</main>
</body>
</html>