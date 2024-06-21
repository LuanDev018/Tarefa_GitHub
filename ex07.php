<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ex07</title>
	<link rel="stylesheet" type="text/css" href="template.css">
</head>
<body>
	<header><h1>Consumo Médio</h1></header>
	<section>
		<form method="post">
			<label>Distância Total (Km)</label><br>
			<input type="text" name="Dist"><br>

			<br><label>Consumo Total (l)</label><br>
			<input type="text" name="Cons"><br>

			<br><input type="submit" name="btnCalcular" value="Calcular"><br>
			<a href="index.php">Voltar</a>
		</form>
	</section>
	<main>
		<?php 
			$dist = $_POST['Dist'];
			$cons = $_POST['Cons'];
			$media = $dist / $cons;
			$media = number_format($media,1);
			echo "<h4>Consumo médio de: $media Km/l";
		?>
	</main>
</body>
</html>