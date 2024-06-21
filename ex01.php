<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CATEGORIAS</title>
    <link rel="stylesheet" type="text/css" href="template.css">
</head>
<body>
    <section>
        <form method="post" action="">
            <label><h1>Digite a data de nascimento</h1></label>
            <input type="text" name="Nasc"><br>
            <br><input type="submit" name="btnCalcular" value="Calcular">
            <a href="index.php">Voltar</a>   
        </form>   
    </section>
    <main>
        <?php
            $nasc = $_POST['Nasc'];
            $data = date("Y");
            $idade = $data - $nasc;
            echo "Idade: $idade";
            if ($idade < 6 or $idade > 20) {
                echo "<br>Idade Miníma: 6 anos";
                echo "<br>Idade Maxíma: 20 anos";
            }
            else if ($idade >= 6 and $idade <= 7) {
                echo "<br>O jogador é da categoria: Sub-7";
            }
            else if ($idade <= 9) {
                echo "<br>O jogador é da categoria: Sub-9";
            }
            else if ($idade <= 11) {
                echo "<br>O jogador é da categoria: Sub-11";
            }
            else if ($idade <= 13) {
                echo "<br>O jogador é da categoria: Sub-13";
            }
            else if ($idade <= 15) {
                echo "<br>O jogador é da categoria: Sub-15";
            }
            else if ($idade <= 17) {
                echo "<br>O jogador é da categoria: Sub-17";
            }
            else if ($idade <= 20) {
                echo "<br>O jogador é da categoria: Sub-20";
            }            
        ?>
    </main> 
</body>
</html>