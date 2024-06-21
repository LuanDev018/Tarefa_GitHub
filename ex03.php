<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculadora Salário</title>
    <link rel="stylesheet" type="text/css" href="template.css">
</head>
<body>
    <header><h1>Calculadora de Salário Líquido</h1></header>
    <main>
        <form method="post" action="calcular.php">
            <label for="salario_bruto">Salário Bruto:</label><br>
            <input type="number" name="txtSalario_bruto" step="0.01" required><br>

            <label for="descontos">Total de Descontos:</label><br>
            <input type="number" name="txtDescontos" step="0.01" required><br>

            <input type="submit" value="Calcular Salário Líquido">
            <input type="reset" value="Reiniciar">
        </form>
    <a href="index.php">Voltar</a>
    </main>
</body>
</html>
