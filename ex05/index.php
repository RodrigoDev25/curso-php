<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores e Expressões Aritiméticas</title>
</head>

<body>
    <h1>Operadores e Expressões Aritiméticas</h1>
    <h2>Expressão com divisão, soma e potenciação</h2>
    <?php
    $expressão = 50 / 2 + 3 ** 2;
    echo "50/2+3**2 = $expressão<br>";
    echo "50/2+9<br>";
    echo "25+9<br>";
    echo "34<br>-------------------<br>";

    $expressão = 50 / (2 + 3) ** 2;
    echo "50/(2+3)**2 = $expressão<br>";
    echo "50/5**2 <br>";
    echo "50/25 <br>";
    echo "2 <br>";
    ?>
</body>

</html>