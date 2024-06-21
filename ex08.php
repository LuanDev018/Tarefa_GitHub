<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tipos de Triangulo</title>
    <link rel="stylesheet" type="text/css" href="template.css">
</head>
<body>
    <header><h1>Tipos de Triangulo</h1></header>
    <section>
        <form method="post" action="">
            <br><label>Medida do 1° lado</label>
            <input type="number" name="lado1">
            <br>
            <br><label>Medida do 2° lado</label>
            <input type="number" name="lado2">
            <br>
            <br><label>Medida do 3° lado</label>
            <input type="number" name="lado3">
            <br>
            <br><input type="submit" name="btnConfirmar" value="Confirmar">
            <a href="index.php">Voltar</a>
        </form>
    </section>
    <main>
        <?php
            $l1 = $_POST['lado1'];
            $l2 = $_POST['lado2'];
            $l3 = $_POST['lado3'];
            if ($l1 + $l2 <= $l3 or $l1 + $l3 <= $l2 or $l2 + $l3 <= $l1) {
                echo "<p><h4>Não é possível formar um triângulo";
            }
            elseif ($l1 == $l2 and $l2 == $l3) {
                echo "<p><h4>Tipo: Triângulo Equilátero";
                echo "<img src = \"triEqui.png\">";
            }
            elseif ($l1 != $l2 and $l2 != $l3) {
                echo "<p><h4>Tipo: Triângulo Escaleno";
                echo "<img src = \"triEsca.png\">";
            }
            elseif ($l1 == $l2 or $l1 == $l3 or $l2 == $l3) {
                echo "<p><h4>Tipo: Triângulo Isósceles";
                echo "<img src = \"triIso.png\">";
            }       
        ?>
    </main>

</body>
</html>