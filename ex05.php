<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ex05</title>
	<link rel="stylesheet" type="text/css" href="template.css">
</head>
<body>
	<header><h1>Competição de Ginástica</h1></header>
	<section>
		<form method="post">
		<label>Nota da Partida</label>
		<input type="text" name="Nota"><br>

		<br><label>Nota do 1° Juiz </label>
		<input type="text" name="Juiz1"><br>

		<br><label>Nota do 2° Juiz </label>
		<input type="text" name="Juiz2"><br>

		<br><label>Nota do 3° Juiz </label>
		<input type="text" name="Juiz3"><br>

		<br><label>Nota do 4° Juiz </label>
		<input type="text" name="Juiz4"><br>

		<br><label>Nota do 5° Juiz </label>
		<input type="text" name="Juiz5"><br>

		<br><input type="submit" name="btnMédia" value="Calcular Média">
		<a href="index.php">Voltar</a>
	</form>
	</section>
	<main>
		<?php
			$np = $_POST['Nota'];
			$n1 = $_POST['Juiz1'];
			$n2 = $_POST['Juiz2'];
			$n3 = $_POST['Juiz3'];
			$n4 = $_POST['Juiz4'];
			$n5 = $_POST['Juiz5'];
			$nf = ($n1 + $n2 + $n3 + $n4 + $n5) / 5 + $np;
			echo "<h4>Nota Final: $nf";
		?>
	</main>
</body>
</html>